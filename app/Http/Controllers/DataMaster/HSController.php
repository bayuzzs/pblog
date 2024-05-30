<?php

namespace App\Http\Controllers\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\DataMaster\HS;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class HSController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request ) : View
        {
        $search     = $request->query('search');
        $sortOption = $request->query('sortOption', 'kodeHS_asc');

        // Split the sortOption into filter and sortDirection
        list($filter, $sortDirection) = explode('_', $sortOption);

        $HSs = HS::query()
            ->when($search, function ($query) use ($search) {
                $query->where('kodeHS', 'like', '%' . $search . '%');
                })
            ->orderBy($filter, $sortDirection)
            ->paginate(10);

        return view('data-master.hs', compact('HSs'));
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
    public function store( Request $request )
        {
        $validatedRequest = $request->validate([
            'kodeHS'              => 'required|unique:hs|max:10',
            'uraianBarangBahasa'  => 'required',
            'uraianBarangEnglish' => 'required',
            'isLartas'            => 'required',
        ], [
            'kodeHS.unique'                => 'Kode HS sudah terdaftar',
            'kodeHS.required'              => 'Kode HS harus diisi',
            'kodeHS.max'                   => 'Kode HS maksimal 10 karakter',
            'isLartas.required'            => 'Lartas harus diisi',
            'uraianBarangBahasa.required'  => 'Uraian harus diisi',
            'uraianBarangEnglish.required' => 'Uraian harus diisi',
        ]);

        HS::create($validatedRequest);

        return redirect(route('data-master.hs'))->with('success', 'Data HS berhasil ditambahkan');
        }

    /**
     * Display the specified resource.
     */
    public function show( HS $hS )
        {
        //
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( HS $hS )
        {
        //
        }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, HS $hS )
        {
        $validatedRequest = $request->validate([
            'kodeHS'              => 'required|exists:hs,kodeHS|max:10',
            'uraianBarangBahasa'  => 'required',
            'uraianBarangEnglish' => 'required',
            'isLartas'            => 'required',
        ], [
            'kodeHS.exists'                => 'Kode HS tidak ditemukan di database',
            'kodeHS.required'              => 'Kode HS harus diisi',
            'kodeHS.max'                   => 'Kode HS maksimal 10 karakter',
            'isLartas.required'            => 'Lartas harus diisi',
            'uraianBarangBahasa.required'  => 'Uraian harus diisi',
            'uraianBarangEnglish.required' => 'Uraian harus diisi',
        ]);

        // Find the HS model by kodeHS
        $hS = HS::where('kodeHS', $validatedRequest['kodeHS'])->firstOrFail();

        // Update the HS model with validated data
        $hS->update($validatedRequest);

        // Return a response or redirect as needed
        return redirect()->route('data-master.hs')->with('success', 'Data HS berhasil diupdate');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request )
        {
        $validatedRequest = $request->validate([
            'kodeHS' => 'required|array',
        ], [
            'kodeHS.required' => 'Kode HS harus diisi',
        ]);

        if ( ! $validatedRequest ) {
            return redirect()->back()->withErrors(['kodeHS', 'Gagal Hapus Data HS']);
            }

        HS::destroy($validatedRequest['kodeHS']);
        return redirect(route('data-master.hs'))->with('success', 'Data HS berhasil di hapus');
        }
    }
