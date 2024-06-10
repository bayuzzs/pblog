<?php

namespace App\Http\Controllers\DokumenImpor;

use App\Http\Controllers\Controller;
use App\Models\DokumenImpor\DokumenImpor;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HeaderController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( string $nomorAju ) : View
        {
        try {
            $dokumenImpor = DokumenImpor::where('nomorAju', $nomorAju)->firstOrFail();
            return view('dokumen-impor.header', compact('dokumenImpor'));

            } catch (\Exception $th) {
            return redirect(route('dokumen-impor'))->with('error', 'Terjadi Kesalahan: ' . $th->getMessage());

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
        try {
            $dokumenImpor = DokumenImpor::where('nomorAju', $nomorAju)->firstOrFail();
            $dokumenImpor->update($request->all());
            return redirect(route('dokumen-impor.entitas', $dokumenImpor->nomorAju))->with('success', 'Berhasil Mengisi Data Header!');
            } catch (\Exception $th) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan: ' . $th->getMessage());
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
