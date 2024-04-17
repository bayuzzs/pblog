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
        $negaras = Negara::all();
        return view('negara.index', compact('negaras'));
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
        $request->validate([
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
        $request->validate([
            'namaNegara' => 'required',
        ]);

        $negara = Negara::findOrFail($id);
        $negara->update($request->all());

        return redirect()->route('negara.index')->with('success', 'Negara berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $negara = Negara::findOrFail($id);
        $negara->delete();

        return redirect()->route('negara.index')->with('success', 'Negara berhasil dihapus');
    }
}
