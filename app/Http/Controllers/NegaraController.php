<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Negara;

class NegaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('negara.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidateData = $request->validate([
            'kodeNegara' => 'required|unique:negara',
            'namaNegara' => 'required',
        ]);

        Negara::create($request->all());

        return redirect()->route('negara.index')->with('success', 'Negara berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $negara = Negara::findOrFail($id);
        return view('negara.show', compact('negara'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $negara = Negara::findOrFail($id);
        return view('negara.edit', compact('negara'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedRequest = $request->validate([
            'kodeNegara' => 'required',
            'namaNegara' => 'required',
        ]);
        $kodeNegara = $request->kodeNegara;
        $negara = Negara::findOrFail($kodeNegara);
        $negara->update($validatedRequest);

        return redirect()->route('negara.index')->with('success', 'Negara berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $negara = Negara::where('kodenegara', $id)->get();

    if($negara->count() != 1){
        return redirect('/Negara')->with([
            'notifikasi' => 'Data Negara tidak berhasil ditemukan!',
            'type'  => 'error'
        ]);
    }

    $negara = Negara::findOrFail($id);
    $negara->delete();

    return redirect()->route('negara.index')->with('success', 'Negara berhasil dihapus');
}

}
