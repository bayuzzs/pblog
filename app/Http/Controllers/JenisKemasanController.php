<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisKemasan;

class JenisKemasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisKemasans = JenisKemasan::all();
        return view('jenis_kemasan.index', compact('jenisKemasans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis_kemasan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kodeKemasan' => 'required|unique:jenis_kemasan',
            'namaKemasan' => 'required',
        ]);

        JenisKemasan::create($request->all());

        return redirect()->route('jenis-kemasan.index')->with('success', 'Jenis Kemasan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jenisKemasan = JenisKemasan::findOrFail($id);
        return view('jenis_kemasan.show', compact('jenisKemasan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jenisKemasan = JenisKemasan::findOrFail($id);
        return view('jenis_kemasan.edit', compact('jenisKemasan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'KodeKemasan' => 'required',
            'namaKemasan' => 'required',
        ]);


        $jenisKemasan = JenisKemasan::findOrFail($id);
        $jenisKemasan->update($request->all());

        return redirect()->route('jenis-kemasan.index')->with('success', 'Jenis Kemasan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $jenisKemasan = JenisKemasan::where('KodeKemasan', $id)->get();

        if($jenisKemasan->count() != 1){
            return redirect('/JenisKemasan')->with([
                'notifikasi' => 'Data Jenis Kemasan tidak berhasil ditemukan!',
                'type'  => 'error'
            ]);
        }
    
        $jenisKemasan = JenisKemasan::findOrFail($id);
        $jenisKemasan->delete();
        return redirect()->route('jenis-kemasan.index')->with('success', 'Jenis Kemasan berhasil dihapus');
    }
}
