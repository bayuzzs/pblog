<?php

namespace App\Http\Controllers\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\DataMaster\JenisKemasan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class JenisKemasanController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request ) : View
        {
        $search     = $request->query('search');
        $sortOption = $request->query('sortOption', 'kodeKemasan_asc');

        // Split the sortOption into filter and sortDirection
        list($filter, $sortDirection) = explode('_', $sortOption);

        $JenisKemasans = JenisKemasan::query()
            ->when($search, function ($query) use ($search) {
                $query->where('kodeKemasan', 'like', '%' . $search . '%');
                })
            ->orderBy($filter, $sortDirection)
            ->paginate(10);
        return view('data-master.jenis-kemasan', compact('JenisKemasans'));
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
                'kodeKemasan'              => 'required|unique:jenis_kemasan|max:5',
                'namaKemasan'  => 'required',
            ], [
                'kodeKemasan.unique'                => 'Kode Kemasan sudah terdaftar',
                'kodeKemasan.required'              => 'Kode Kemasan harus diisi',
                'kodeKemasan.max'                   => 'Kode Kemasan maksimal 5 karakter',
                'namaKemasan.required'            => 'Nama kemasan harus diisi',
            ]);
    
            JenisKemasan::create($validatedRequest);
    
            return redirect(route('data-master.jenis-kemasan'))->with('success', 'Data Kemasan berhasil ditambahkan');
        //
        }

    /**
     * Display the specified resource.
     */
    public function show( JenisKemasan $jenisKemasan )
        {
        //
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( JenisKemasan $jenisKemasan )
        {
        //
        }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, JenisKemasan $jenisKemasan )
        {
            $validatedRequest = $request->validate([
                'kodeKemasan'              => 'required|exists:jenis_kemasan,kodeKemasan|max:5',
                'namaKemasan'  => 'required',
            ], [
                'kodeKemasan.exists'                => 'Kode Kemasan tidak ditemukan di database',
                'kodeKemasan.required'              => 'Kode Kemasan harus diisi',
                'kodeKemasan.max'                   => 'Kode Kemasan maksimal 10 karakter',
                'namaKemasan.required'            => 'Nama Kemasan harus diisi',
            ]);
    
            // Find the HS model by kodeHS
            $jenis_kemasan = JenisKemasan::where('kodeKemasan', $validatedRequest['kodeKemasan'])->firstOrFail();
    
            // Update the HS model with validated data
            $jenis_kemasan->update($validatedRequest);
    
            // Return a response or redirect as needed
            return redirect()->route('data-master.jenis-kemasan')->with('success', 'Data Kemasan berhasil diupdate');
        //
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request )
        {
            $validatedRequest = $request->validate([
                'kodeKemasan' => 'required|array',
            ], [
                'kodeKemasan.required' => 'Kode Kemasan harus diisi',
            ]);
    
            if ( ! $validatedRequest ) {
                return redirect()->back()->withErrors(['kodeKemasan', 'Gagal Hapus Data Kemasan']);
                }
    
            JenisKemasan::destroy($validatedRequest['kodeKemasan']);
            return redirect(route('data-master.jenis-kemasan'))->with('success', 'Data Kemasan berhasil di hapus');
        //
        }
    }
