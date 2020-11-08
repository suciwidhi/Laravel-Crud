<?php

namespace App\Http\Controllers;

use App\Pembinaan;
use Illuminate\Http\Request;

class PembinaanController extends Controller
{
    public function index()
    {
        $data_pembinaan = \App\Pembinaan::all();
        return view('pembinaan.index', ['data_pembinaan' => $data_pembinaan]);
    }

    public function create(Request $request)
    {
        \App\Pembinaan::create($request->all());
        return redirect('/pembinaan')->with('sukses', 'Input Data Berhasil!');
    }
    public function edit($id)
    {
        $pembinaan = Pembinaan::where('id', $id)->first();
        return view('/pembinaan/edit', compact('pembinaan'));
    }

    public function update(Request $request, $id)
    {
        Pembinaan::where('id', $id)->update([
            'id' => $request->id,
            'Nama_daerah' => $request->Nama_daerah,
            'Tanggal' => $request->Tanggal,
            'Kegiatan' => $request->Kegiatan,
            'Gambar' => $request->Gambar,

        ]);

        return redirect('/pembinaan');
    }

    public function delete($id)
    {
        Pembinaan::destroy($id);
        return back();
    }

    
}
