<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HS; 

class HSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data HS dan menampilkannya
        $hsData = HS::all();
        return view('hs.index', compact('hsData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form untuk membuat data HS baru
        return view('hs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kodeHS' => 'required|unique:hs',
            'uraianBarangBahasa' => 'required',
            'uraianBarangEnglish' => 'required',
            'isLartas' => 'required|boolean',
        ]);

        HS::create($request->all());
        return redirect()->route('hs.index')->with('success', 'Data HS berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $kodeHS)
    {
        $hs = HS::findOrFail($kodeHS);
        return view('hs.show', compact('hs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $kodeHS)
    {
        $hs = HS::findOrFail($kodeHS);
        return view('hs.edit', compact('hs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kodeHS)
    {
        $request->validate([
            'uraianBarangBahasa' => 'required',
            'uraianBarangEnglish' => 'required',
            'isLartas' => 'required|boolean',
        ]);
        $hs = HS::findOrFail($kodeHS);
        $hs->update($request->all());
        return redirect()->route('hs.index')->with('success', 'Data HS berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kodeHS)
    {
        $hs = HS::findOrFail($kodeHS);
        $hs->delete();
        return redirect()->route('hs.index')->with('success', 'Data HS berhasil dihapus');
    }
}
