<?php

namespace App\Http\Controllers\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\DataMaster\SatuanBarang;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SatuanBarangController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : View
        {
            $search     = $request->query('search');
            $sortOption = $request->query('sortOption', 'kodeSatuanBarang_asc');
    
            // Split the sortOption into filter and sortDirection
            list($filter, $sortDirection) = explode('_', $sortOption);
    
            $SatuanBarangs = SatuanBarang::query()
                ->when($search, function ($query) use ($search) {
                    $query->where('kodeSatuanBarang', 'like', '%' . $search . '%');
                    })
                ->orderBy($filter, $sortDirection)
                ->paginate(10);
        return view('data-master.satuan-barang', compact('SatuanBarangs'));
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
                'kodeSatuanBarang'              => 'required|unique:satuan_barang|max:3',
                'namaSatuaBarang'               => 'required',
            ], [
                'kodeSatuangBarang.unique'                => 'Kode Satuan Barang sudah terdaftar',
                'kodeSatuanBarang.required'              => 'Kode Satuan Barang harus diisi',
                'kodeSatuanBarang.max'                   => 'Kode Satuan Barang maksimal 3 karakter',
                'namaSatuanBarang.required'            => 'Nama Satuan Barang harus diisi',
            ]);
    
            SatuanBarang::create($validatedRequest);
    
            return redirect(route('data-master.satuan-barang'))->with('success', 'Data Satuan Barang berhasil ditambahkan');
        //
        }

    /**
     * Display the specified resource.
     */
    public function show( SatuanBarang $satuanBarang )
        {
        //
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( SatuanBarang $satuanBarang )
        {
        //
        }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, SatuanBarang $satuanBarang )
        {
            $validatedRequest = $request->validate([
                'kodeSatuanBarang'              => 'required|exists:satuan_barang,kodeSatuanBarang|max:3',
                'namaSatuanBarang'  => 'required',
            ], [
                'kodeSatuanBarang.exists'                => 'Kode Satuan Barang tidak ditemukan di database',
                'kodeSatuanBarang.required'              => 'Kode Satuan Barang harus diisi',
                'kodeSatuanBarang.max'                   => 'Kode Satuan Barang maksimal 10 karakter',
                'namaSatuanBarang.required'            => 'Nama Satuan Barang harus diisi',
            ]);
    
            // Find the HS model by kodeHS
            $satuan_barang = SatuanBarang::where('kodeSatuanBarang', $validatedRequest['kodeSatuanBarang'])->firstOrFail();
    
            // Update the HS model with validated data
            $satuan_barang->update($validatedRequest);
    
            // Return a response or redirect as needed
            return redirect()->route('data-master.satuan-barang')->with('success', 'Data Satuan Barang berhasil diupdate');
        //
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request )
        {
            $validatedRequest = $request->validate([
                'kodeSatuanBarang' => 'required|array',
            ], [
                'kodeSatuanBarang.required' => 'Kode Satuan Barang harus diisi',
            ]);
    
            if ( ! $validatedRequest ) {
                return redirect()->back()->withErrors(['kodeSatuanBarang', 'Gagal Hapus Data Satuan Barang']);
                }
    
            SatuanBarang::destroy($validatedRequest['kodeSatuanBarang']);
            return redirect(route('data-master.satuan-barang'))->with('success', 'Data Satuan Barang berhasil di hapus');
        //
        }
    }
