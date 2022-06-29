<?php

namespace App\Http\Controllers;

use App\Models\DataCustomer;
use Illuminate\Http\Request;

class DashboardDCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datacustomer.index', [
            "title" => "Data Customer",
            "dataCustomers" => DataCustomer::latest()->filter()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datacustomer.create', [
            "title" => "Tambah Customer",
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
            'nama_customer' => 'required|unique:data_customers',
            'kota' => 'required',
            'sales' => 'required',
            'area' => 'required'
        ]);

        DataCustomer::create($validatedData);

        return redirect('/dashboard/datacustomer')->with('success', 'Customer Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataCustomer  $dataCustomer
     * @return \Illuminate\Http\Response
     */
    public function show(DataCustomer $dataCustomer)
    {
        return DataCustomer::find($dataCustomer->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataCustomer  $dataCustomer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('datacustomer.edit', [
            "title" => "Edit Customer",
            "dataCustomer" => DataCustomer::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataCustomer  $dataCustomer
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, DataCustomer $dataCustomer)
    // {
    //     $rules = [
    //         'kota' => 'required',
    //         'sales' => 'required',
    //         'area' => 'required'
    //     ];

    //     if ($request->nama_customer != $dataCustomer->nama_customer) {
    //         $rules['nama_customer'] = 'required|unique:data_customers';
    //     }

    //     $validatedData = $request->validate($rules);

    //     DataCustomer::where('id', $dataCustomer->id)->update($validatedData);

    //     return redirect('/dashboard/datacustomer')->with('success', 'Data Customer Berhasil Diubah');
    // }

    public function update(Request $request, $id)
    {


        $rules = $request->validate([
            'kota' => 'required',
            'sales' => 'required',
            'area' => 'required'
        ]);

        $dataCustomer = DataCustomer::findOrFail($id);

        if ($request->nama_customer != $dataCustomer->nama_customer) {
            $rules['nama_customer'] = 'required|unique:data_customers';
        }

        $dataCustomer->update([
            'nama_customer' => $request->nama_customer,
            'kota' => $request->kota,
            'sales' => $request->sales,
            'area' => $request->area,
        ]);

        return redirect()
            ->route('datacustomer.index')
            ->with([
                'success' => 'Data Customer Berhasil Diubah'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataCustomer  $dataCustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataCustomer = DataCustomer::find($id);
        $dataCustomer->delete();
        return redirect()->route('datacustomer.index')->with('success', 'Customer Berhasil Dihapus');
    }
}
