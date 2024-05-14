<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SatuanBarang;

class SatuanBarangController extends Controller
{
    public function index()
    {
        $satuanBarangs = SatuanBarang::all();
        return view('satuan_barang.index', compact('satuanBarangs'));
    }

    public function create()
    {
        return view('satuan_barang.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kodeSatuanBarang' => 'required|unique:satuan_barang',
            'namaSatuanBarang' => 'required',
        ]);

        SatuanBarang::create($request->all());
        return redirect()->route('satuan-barang.index')->with('success', 'Satuan Barang berhasil ditambahkan');
    }

    public function edit($kodeSatuanBarang)
    {
        $satuanBarang = SatuanBarang::find($kodeSatuanBarang);
        if (!$satuanBarang) {
            return redirect()->route('satuan-barang.index')->with('error', 'Satuan Barang tidak ditemukan');
        }
        return view('satuan_barang.edit', compact('satuanBarang'));
    }

    public function update(Request $request, $kodeSatuanBarang)
    {
        $validateData = $request->validate([
            'namaSatuanBarang' => 'required',
        ]);
        $satuanBarang = SatuanBarang::find($kodeSatuanBarang);
        if (!$satuanBarang) {
            return redirect()->route('satuan-barang.index')->with('error', 'Satuan Barang tidak ditemukan');
        }
        $satuanBarang->update($request->all());
        return redirect()->route('satuan-barang.index')->with('success', 'Satuan Barang berhasil diubah');
    }

    public function destroy($kodeSatuanBarang)
    {
        $satuanBarang = SatuanBarang::find($kodeSatuanBarang);
        if($satuanBarang->count() != 1){
            return redirect('/SatuanBarang')->with([
                'notifikasi' => 'Data Satuan Barang tidak berhasil ditemukan!',
                'type'  => 'error'
            ]);
        }
        $satuanBarang->delete();
        return redirect()->route('satuan-barang.index')->with('success', 'Satuan Barang berhasil dihapus');
    }
}
