<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelabuhan;

class PelabuhanController extends Controller
{
    public function index()
    {
        $pelabuhans = Pelabuhan::all();
        return view('pelabuhan.index', compact('pelabuhans'));
    }

    public function create()
    {
        return view('pelabuhan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodePelabuhan' => 'required|unique:pelabuhan',
            'namaPelabuhan' => 'required',
            'kodeKantor' => 'required',
        ]);

        Pelabuhan::create($request->all());
        return redirect()->route('pelabuhan.index')->with('success', 'Pelabuhan berhasil ditambahkan');
    }

    public function edit($kodePelabuhan)
    {
        $pelabuhan = Pelabuhan::find($kodePelabuhan);
        if (!$pelabuhan) {
            return redirect()->route('pelabuhan.index')->with('error', 'Pelabuhan tidak ditemukan');
        }
        return view('pelabuhan.edit', compact('pelabuhan'));
    }

    public function update(Request $request, $kodePelabuhan)
    {
        $request->validate([
            'namaPelabuhan' => 'required',
            'kodeKantor' => 'required',
        ]);

        $pelabuhan = Pelabuhan::find($kodePelabuhan);
        if (!$pelabuhan) {
            return redirect()->route('pelabuhan.index')->with('error', 'Pelabuhan tidak ditemukan');
        }
        $pelabuhan->update($request->all());
        return redirect()->route('pelabuhan.index')->with('success', 'Pelabuhan berhasil diubah');
    }

    public function destroy($kodePelabuhan)
    {
        $pelabuhan = Pelabuhan::find($kodePelabuhan);
        if (!$pelabuhan) {
            return redirect()->route('pelabuhan.index')->with('error', 'Pelabuhan tidak ditemukan');
        }

        $pelabuhan->delete();
        return redirect()->route('pelabuhan.index')->with('success', 'Pelabuhan berhasil dihapus');
    }
}
