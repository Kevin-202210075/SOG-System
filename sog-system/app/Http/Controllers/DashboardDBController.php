<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;

class DashboardDBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('databarang.index', [
            "title" => "Data Barang",
            "dataBarangs" => DataBarang::latest()->filter()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('databarang.create', [
            "title" => "Tambah Barang"
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
            'barcode' => 'required|unique:data_barangs',
            'nama_barang' => 'required|unique:data_barangs',
            'satuan' => 'required',
            'jumlah_barang' => 'required'
        ]);

        DataBarang::create($validatedData);

        return redirect('/dashboard/databarang')->with('success', 'Barang Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function show(DataBarang $dataBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('databarang.edit', [
            "title" => "Edit Barang",
            "dataBarang" => DataBarang::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = $request->validate([
            'satuan' => 'required',
        ]);

        $dataBarang = DataBarang::findOrFail($id);

        if ($request->barcode != $dataBarang->barcode) {
            $rules['barcode'] = 'required|unique:data_barangs';
        } else if ($request->nama_barang != $dataBarang->nama_barang) {
            $rules['nama_barang'] = 'required|unique:data_barangs';
        }

        $dataBarang->update([
            'barcode' => $request->barcode,
            'nama_barang' => $request->nama_barang,
            'satuan' => $request->satuan,
        ]);

        return redirect()
            ->route('databarang.index')
            ->with([
                'success' => 'Data Barang Berhasil Diubah'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataBarang = DataBarang::find($id);
        $dataBarang->delete();
        return redirect()->route('databarang.index')->with('success', 'Barang Berhasil Dihapus');
    }
}
