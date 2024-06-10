<?php

namespace App\Http\Controllers\DokumenImpor;

use App\Http\Controllers\Controller;
use App\Models\DokumenImpor\DokumenImpor;
use App\Models\DokumenImpor\Pernyataan;
use Illuminate\Http\Request;

class PernyataanController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( string $nomorAju )
        {
        try {
            $dokumenImpor = DokumenImpor::where('nomorAju', $nomorAju)->firstOrFail();

            $pernyataan = Pernyataan::where('nomorAju', $nomorAju)->first();

            return view('dokumen-impor.pernyataan', compact(['dokumenImpor', 'pernyataan']));

            } catch (\Exception $th) {
            return redirect(route('dokumen-impor'))->with('error', 'Terjadi Kesalahan : ' . $th->getMessage());

            }
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
        {
        //
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request, $nomorAju )
        {
        try {
            $validated = $request->validate([
                'jabatan' => 'required',
                'nama'    => 'required',
                'tempat'  => 'required',
                'tanggal' => 'required|date',
            ], [
                'required' => 'Kolom :attribute harus diisi.',
                'date'     => 'Kolom :attribute harus berupa tanggal.',
            ]);

            $pernyataan = Pernyataan::firstOrCreate([
                'nomorAju' => $request->nomorAju,
            ], $validated);

            $pernyataan->update($validated);
            return redirect(route('dokumen-impor', ['nomorAju' => $nomorAju]))->with('success', 'Berhasil Menyimpan Dokumen!');

            } catch (\Exception $th) {
            return redirect(route('dokumen-impor.pernyataan', ['nomorAju' => $nomorAju]))->with('error', 'Terjadi Kesalahan : ' . $th->getMessage());
            }
        }

    /**
     * Display the specified resource.
     */
    public function show( string $id )
        {
        //
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id )
        {
        //
        }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id )
        {
        //
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id )
        {
        //
        }
    }
