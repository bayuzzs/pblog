<?php

namespace App\Http\Controllers\DokumenImpor;

use App\Http\Controllers\Controller;
use App\Models\DokumenImpor\DokumenImpor;
use App\Models\DokumenImpor\Transaksi;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TransaksiController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( string $nomorAju )
        {
        try {
            $dokumenImpor = DokumenImpor::where('nomorAju', $nomorAju)->firstOrFail();
            $transaksi    = Transaksi::with('valuta')->where('nomorAju', $nomorAju)->first();

            return view('dokumen-impor.transaksi', compact(['dokumenImpor', 'transaksi']));

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
            'kodeValuta'         => 'required|string|size:3',
            'ndpbm'              => 'required|decimal:0,4|min:0',
            'kodeJenisTransaksi' => 'required|string|size:3',
            'kodeIncoterm'       => 'required|string|size:3',
            'nilaiIncoterm'      => 'required|decimal:0,2|min:0',
            'biayaTambahan'      => 'required|decimal:0,2|min:0',
            'diskon'             => 'required|decimal:0,2|min:0',
            'freight'            => 'required|decimal:0,4|min:0',
            'kodeAsuransi'       => 'required|string|size:2',
            'nilaiAsuransi'      => 'required|decimal:0,2|min:0',
            'nilaiVD'            => 'required|decimal:0,4|min:0',
            'cif'                => 'required|decimal:0,2|min:0',
            'bruto'              => 'required|decimal:0,4|min:0',
            'netto'              => 'required|decimal:0,4|min:0',
        ], [
            'required' => 'Kolom :attribute wajib diisi.',
            'min'      => 'Nilai tidak boleh kurang dari 0.',
            'decimal'  => 'Nilai harus berupa angka.',
        ]);

        try {
            $transaksi = Transaksi::firstOrCreate(['nomorAju' => $nomorAju], $request->all());
            $transaksi->update($request->all());

            return redirect(route('dokumen-impor.barang', ['nomorAju' => $nomorAju]))->with('success', 'Berhasil isi data Transaksi');

            } catch (\Exception $th) {
            return redirect(route('dokumen-impor.transaksi', ['nomorAju' => $nomorAju]))->with('error', 'Terjadi Kesalahan : ' . $th->getMessage());

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
