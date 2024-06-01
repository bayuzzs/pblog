<?php

namespace App\Http\Controllers\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\DataMaster\JenisDokumen;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class JenisDokumenController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request ) : View
        {
        $search     = $request->query('search');
        $sortOption = $request->query('sortOption', 'kodeJenisDokumen_asc');

        // Split the sortOption Into filter and sortDirection
        list($filter, $sortDirection) = explode('_', $sortOption);
        $jenisDokumens                = JenisDokumen::query()
            ->when($search, function ($query) use ($search) {
                $query->where('kodeJenisDokumen', 'like', '%' . $search . '%');
                })
            ->orderBy($filter, $sortDirection)
            ->paginate(10);

        return view('data-master.jenis-dokumen', compact('jenisDokumens'));
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
            'kodeJenisDokumen' => 'required|unique:jenis_dokumen|max:5',
            'namaDokumen'      => 'required',
        ], [
            'kodeJenisDokumen.unique'   => 'Kode Jenis Dokumen sudah terdaftar',
            'kodeJenisDokumen.required' => 'Kode Jenis Dokumen harus diisi',
            'kodeJenisDokumen.max'      => 'Kode Jenis Dokumen maksimal 5 karakter',
            'namaDokumen.required'      => 'Nama Dokumen harus diisi',
        ]);

        try {
            JenisDokumen::create($validatedRequest);
            return redirect(route('data-master.jenis-dokumen'))->with('success', 'Data Jenis Dokumen berhasil ditambahkan');

            } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan: ' . $th->getMessage());

            }
        }

    /**
     * Display the specified resource.
     */
    public function show( JenisDokumen $jenisDokumen )
        {
        //
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( JenisDokumen $jenisDokumen )
        {
        //
        }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, JenisDokumen $jenisDokumen )
        {
        $validatedRequest = $request->validate([
            'kodeJenisDokumen' => 'required|exists:jenis_dokumen,kodeJenisDokumen|max:5',
            'namaDokumen'      => 'required',
        ], [
            'kodeJenisDokumen.exists'   => 'Kode Jenis Dokumen tidak ditemukan di database',
            'kodeJenisDokumen.required' => 'Kode Jenis Dokumen harus diisi',
            'kodeJenisDokumen.max'      => 'Kode Jenis Dokumen maksimal 5 karakter',
            'namaDokumen.required'      => 'Nama Dokumen harus diisi',
        ]);

        try {
            $jenisdokumen = JenisDokumen::where('kodeJenisDOkumen', $validatedRequest['kodeJenisDokumen'])->firstOrFail();
            $jenisdokumen->update($validatedRequest);
            return redirect()->route('data-master.jenis-dokumen')->with('success', 'Data Jenis Dokumen berhasil diupdate');

            } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan: ' . $th->getMessage());

            }
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request )
        {
        $validatedRequest = $request->validate([
            'kodeJenisDokumen' => 'required|array',
        ], [
            'kodeJenisDokumen.required' => 'Kode Jenis Dokumen harus diisi',
        ]);

        if ( ! $validatedRequest ) {
            return redirect()->back()->withErrors(['kodeJenisDokumen', 'Gagal Hapus Data Jenis Dokumen']);
            }
        try {
            JenisDokumen::destroy($validatedRequest['kodeJenisDokumen']);
            return redirect(route('data-master.jenis-dokumen'))->with('success', 'Data Jenis Dokumen berhasil dihapus');
            } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan: ' . $th->getMessage());
            }
        }
    }
