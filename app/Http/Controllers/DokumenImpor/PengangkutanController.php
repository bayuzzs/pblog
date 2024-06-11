<?php

namespace App\Http\Controllers\DokumenImpor;

use App\Http\Controllers\Controller;
use App\Models\DokumenImpor\DokumenImpor;
use App\Models\DokumenImpor\Pengangkutan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PengangkutanController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( string $nomorAju )
        {
        try {
            $dokumenImpor = DokumenImpor::where('nomorAju', $nomorAju)->firstOrFail();
            $pengangkutan = Pengangkutan::with(['pelabuhanTransit', 'pelabuhanMuat', 'pelabuhanTujuan'])
                ->where('nomorAju', $nomorAju)->first();

            return view('dokumen-impor.pengangkutan', compact(['dokumenImpor', 'pengangkutan']));

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
    public function store( Request $request, string $nomorAju )
        {
        $request->validate([
            "kodeTutupPu"     => "required",
            "nomorBc"         => "required|max:6",
            "tanggalBc"       => "required|date",
            "nomorPosBc"      => "required|max:4",
            "nomorSubPosBc"   => "required|max:8",
            "namaPengangkut"  => "required",
            "nomorPengangkut" => "required",
            "kodeCaraAngkut"  => "required",
            "tanggalTiba"     => "required|date",
            "kodeTps"         => "required",
            "kodePelTransit"  => "required",
            "kodePelMuat"     => "required",
            "kodePelTujuan"   => "required",
            "kodeBendera"     => "required",
        ], [
            "required" => ":attribute harus diisi",
            "max"      => ":attribute maksimal :max karakter",
        ]);
        try {
            $pengangkutan = Pengangkutan::firstOrCreate(['nomorAju' => $nomorAju], $request->all());
            $pengangkutan->update($request->all());
            return redirect(route('dokumen-impor.kemasan-kontainer', ['nomorAju' => $nomorAju]))->with('success', 'Berhasil Mengisi Data Pengangkutan!');

            } catch (\Exception $th) {
            return redirect(route('dokumen-impor.pengangkutan', ['nomorAju' => $nomorAju]))->with('error', 'Terjadi Kesalahan : ' . $th->getMessage());

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
