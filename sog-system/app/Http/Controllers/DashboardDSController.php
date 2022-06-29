<?php

namespace App\Http\Controllers;

use App\Models\DataSupplier;
use Illuminate\Http\Request;

class DashboardDSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datasupplier.index', [
            "title" => "Data Supplier",
            "dataSuppliers" => DataSupplier::latest()->filter()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasupplier.create', [
            "title" => "Tambah Supplier"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_supplier' => 'required|unique:data_suppliers',
            'kota' => 'required'
        ]);

        DataSupplier::create($validatedData);

        return redirect('/dashboard/datasupplier')->with('success', 'Supplier Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataSupplier  $dataSupplier
     * @return \Illuminate\Http\Response
     */
    public function show(DataSupplier $dataSupplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataSupplier  $dataSupplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('datasupplier.edit', [
            "title" => "Edit Supplier",
            "dataSupplier" => DataSupplier::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataSupplier  $dataSupplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = $request->validate([
            'kota' => 'required'
        ]);

        $dataSupplier = DataSupplier::findOrFail($id);

        if ($request->nama_supplier != $dataSupplier->nama_supplier) {
            $rules['nama_supplier'] = 'required|unique:data_suppliers';
        }

        $dataSupplier->update([
            'nama_supplier' => $request->nama_supplier,
            'kota' => $request->kota
        ]);

        return redirect()
            ->route('datasupplier.index')
            ->with([
                'success' => 'Data Supplier Berhasil Diubah'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataSupplier  $dataSupplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataSupplier = DataSupplier::find($id);
        $dataSupplier->delete();
        return redirect()->route('datasupplier.index')->with('success', 'Supplier Berhasil Dihapus');
    }
}
