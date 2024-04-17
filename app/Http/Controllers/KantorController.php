<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kantor;

class KantorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kantors = Kantor::all();
        return view('kantor.index', compact('kantors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kantor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kodeKantor' => 'required|unique:kantor',
            'namaKantor' => 'required',
        ]);

        Kantor::create($request->all());

        return redirect()->route('kantor.index')->with('success', 'Kantor berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kantor = Kantor::findOrFail($id);
        return view('kantor.show', compact('kantor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kantor = Kantor::findOrFail($id);
        return view('kantor.edit', compact('kantor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namaKantor' => 'required',
        ]);

        $kantor = Kantor::findOrFail($id);
        $kantor->update($request->all());

        return redirect()->route('kantor.index')->with('success', 'Kantor berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kantor = Kantor::findOrFail($id);
        $kantor->delete();
        return redirect()->route('kantor.index')->with('success', 'Kantor berhasil dihapus');
    }
}
