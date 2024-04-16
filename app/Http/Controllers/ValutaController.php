<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Valuta;

class ValutaController extends Controller
{
    public function index()
    {
        $valutas = Valuta::all();
        return view('valuta.index', compact('valutas'));
    }

    public function create()
    {
        return view('valuta.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodeValuta' => 'required|unique:valuta',
            'namaValuta' => 'required',
            'kurs' => 'required|integer',
        ]);

        Valuta::create($request->all());
        return redirect()->route('valuta.index')->with('success', 'Valuta berhasil ditambahkan');
    }

    public function edit($kodeValuta)
    {
        $valuta = Valuta::find($kodeValuta);
        if (!$valuta) {
            return redirect()->route('valuta.index')->with('error', 'Valuta tidak ditemukan');
        }
        return view('valuta.edit', compact('valuta'));
    }

    public function update(Request $request, $kodeValuta)
    {
        $request->validate([
            'namaValuta' => 'required',
            'kurs' => 'required|integer',
        ]);

        $valuta = Valuta::find($kodeValuta);
        if (!$valuta) {
            return redirect()->route('valuta.index')->with('error', 'Valuta tidak ditemukan');
        }
        $valuta->update($request->all());
        return redirect()->route('valuta.index')->with('success', 'Valuta berhasil diubah');
    }

    public function destroy($kodeValuta)
    {
        $valuta = Valuta::find($kodeValuta);
        if (!$valuta) {
            return redirect()->route('valuta.index')->with('error', 'Valuta tidak ditemukan');
        }
        $valuta->delete();
        return redirect()->route('valuta.index')->with('success', 'Valuta berhasil dihapus');
    }

}
