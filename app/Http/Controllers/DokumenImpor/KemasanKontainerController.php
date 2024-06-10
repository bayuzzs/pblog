<?php

namespace App\Http\Controllers\DokumenImpor;

use App\Http\Controllers\Controller;
use App\Models\DokumenImpor\DokumenImpor;
use App\Models\DokumenImpor\Kemasan;
use App\Models\DokumenImpor\Kontainer;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class KemasanKontainerController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( string $nomorAju )
        {
        try {
            $dokumenImpor = DokumenImpor::where('nomorAju', $nomorAju)->firstOrFail();
            $kemasans     = Kemasan::with('jenisKemasan')->where('nomorAju', $nomorAju)->get();
            $kontainers   = Kontainer::where('nomorAju', $nomorAju)->get();

            return view('dokumen-impor.kemasan-kontainer', compact(['dokumenImpor', 'kemasans', 'kontainers']));

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
    public function storeKemasan( Request $request )
        {
        $request->validate([
            "seri"             => "required|numeric|max_digits:11",
            "jumlah"           => "required|numeric",
            "kodeJenisKemasan" => "required",
            "merek"            => "required",
        ], [
            "required"   => "Atribut :attribute harus diisi",
            "numeric"    => "Atribut :attribute harus berupa angka",
            "max_digits" => "Atribut :attribute maksimal :max_digits digit",
        ]);
        try {
            Kemasan::create([...$request->all(), "nomorAju" => $request->nomorAju]);
            return redirect(route('dokumen-impor.kemasan-kontainer', ['nomorAju' => $request->nomorAju]))->with('success', 'Berhasil Tambah Kemasan');
            } catch (\Throwable $th) {
            return redirect(route('dokumen-impor.kemasan-kontainer', ['nomorAju' => $request->nomorAju]))->with('error', 'Terjadi Kesalahan : ' . $th->getMessage());
            }
        }
    /**
     * Store a newly created resource in storage.
     */
    public function storeKontainer( Request $request, string $nomorAju )
        {
        $request->validate([
            "seri"   => "required|numeric|max_digits:11",
            "nomor"  => "required",
            "ukuran" => "required",
            "jenis"  => "required",
            "tipe"   => "required",
        ], [
            "required"   => "Atribut :attribute harus diisi",
            "numeric"    => "Atribut :attribute harus berupa angka",
            "max_digits" => "Atribut :attribute maksimal :max_digits digit",
        ]);

        try {
            Kontainer::create([...$request->all(), "nomorAju" => $request->nomorAju]);
            return redirect(route('dokumen-impor.kemasan-kontainer', ['nomorAju' => $request->nomorAju]))->with('success', 'Berhasil Tambah Kontainer');

            } catch (\Throwable $th) {
            return redirect(route('dokumen-impor.kemasan-kontainer', ['nomorAju' => $request->nomorAju]))->with('error', 'Terjadi Kesalahan : ' . $th->getMessage());

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
    public function updateKemasan( Request $request, string $nomorAju )
        {
        $request->validate([
            "seri"             => "required|max_digits:11",
            "jumlah"           => "required|numeric",
            "kodeJenisKemasan" => "required",
            "merek"            => "required",
        ], [
            "required"   => "Atribut :attribute harus diisi",
            "numeric"    => "Atribut :attribute harus berupa angka",
            "max_digits" => "Atribut :attribute maksimal :max_digits karakter",
        ]);
        try {
            $kemasan = Kemasan::where('nomorAju', $nomorAju)->where('nomorAju', $nomorAju)->firstOrFail();
            $kemasan->update($request->all());
            return redirect(route('dokumen-impor.kemasan-kontainer', ["nomorAju" => $nomorAju]))->with('success', 'Data Kemasan Berhasil Diperbarui');
            } catch (\Exception $th) {
            return redirect()->back()->withErrors(['error' => 'Terjadi Kesalahan: ' . $th->getMessage()]);
            }
        }
    /**
     * Update the specified resource in storage.
     */
    public function updateKontainer( Request $request, string $nomorAju )
        {
        $request->validate([
            "seri"   => "required|max_digits:11",
            "nomor"  => "required|numeric",
            "ukuran" => "required",
            "jenis"  => "required",
            "tipe"   => "required",
        ], [
            "required"   => "Atribut :attribute harus diisi",
            "numeric"    => "Atribut :attribute harus berupa angka",
            "max_digits" => "Atribut :attribute maksimal :max_digits karakter",
        ]);
        try {
            $kontainer = Kontainer::where('nomorAju', $nomorAju)->where('nomorAju', $nomorAju)->firstOrFail();
            $kontainer->update($request->all());
            return redirect(route('dokumen-impor.kemasan-kontainer', ["nomorAju" => $nomorAju]))->with('success', 'Data Kontainer Berhasil Diperbarui');

            } catch (\Exception $th) {
            return redirect()->back()->withErrors(['error' => 'Terjadi Kesalahan: ' . $th->getMessage()]);

            }
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyKemasan( Request $request, string $id )
        {
        $validated = $request->validate([
            'kemasanId' => 'required|array',
        ], [
            'kemasanId.required' => 'Harap Pilih Data Kemasan',
        ]);

        if ( ! $validated ) {
            return redirect()->back()->with(['error' => 'Gagal Hapus Data Kemasan']);
            }

        try {
            Kemasan::destroy($validated['kemasanId']);
            return redirect(route('dokumen-impor.kemasan-kontainer', ["nomorAju" => $request->nomorAju]))->with('success', 'Data Kemasan berhasil dihapus');

            } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi Kesalahan: ' . $e->getMessage()]);

            }
        }
    /**
     * Remove the specified resource from storage.
     */
    public function destroyKontainer( Request $request, string $nomorAju )
        {
        $validated = $request->validate([
            'kontainerId' => 'required|array',
        ], [
            'kontainerId.required' => 'Harap Pilih Data Kontainer',
        ]);

        if ( ! $validated ) {
            return redirect()->back()->with(['error' => 'Gagal Hapus Data Kemasan']);
            }

        try {
            Kontainer::destroy($validated['kontainerId']);
            return redirect(route('dokumen-impor.kemasan-kontainer', ["nomorAju" => $request->nomorAju]))->with('success', 'Data Kontainer berhasil dihapus');

            } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi Kesalahan: ' . $e->getMessage()]);

            }
        }
    }
