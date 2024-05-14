<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisDokumen;

class JenisDokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisDokumens = JenisDokumen::all();
        return view('jenis_dokumen.index', compact('jenisDokumens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis_dokumen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kodeJenisDokumen' => 'required|unique:jenis_dokumen',
            'namaDokumen' => 'required',
        ]);

        JenisDokumen::create($request->all());

        return redirect()->route('jenis-dokumen.index')->with('success', 'Jenis Dokumen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jenisDokumen = JenisDokumen::findOrFail($id);
        return view('jenis_dokumen.show', compact('jenisDokumen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jenisDokumen = JenisDokumen::findOrFail($id);
        return view('jenis_dokumen.edit', compact('jenisDokumen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $validateData = $request->validate([
        'kodeJenisDokumen' => 'required',
        'namaDokumen' => 'required',
    ]);

    $jenisDokumen = JenisDokumen::findOrFail($id);
    $jenisDokumen->update($request->all());

    return redirect()->route('jenis-dokumen.index')->with('success', 'Jenis Dokumen berhasil diperbarui');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {$jenisDokumen = JenisDokumen::where('KodeJenisDokumen', $id)->get();

        if($jenisDokumen->count() != 1){
            return redirect('/JenisDokumen')->with([
                'notifikasi' => 'Data Jenis Dokumen tidak berhasil ditemukan!',
                'type'  => 'error'
            ]);
        }
    
        $jenisDokumen = JenisDokumen::findOrFail($id);
        $jenisDokumen->delete();
    
        return redirect()->route('jenis-dokumen.index')->with('success', 'Jenis Dokumen berhasil dihapus');
    }
}
