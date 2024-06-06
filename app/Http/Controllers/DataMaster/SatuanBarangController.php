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
    public function index( Request $request )
        {
        $search     = $request->query('search');
        $sortOption = $request->query('sortOption', 'kodeSatuanBarang_asc');

        // Split the sortOption into filter and sortDirection
        list($filter, $sortDirection) = explode('_', $sortOption);

        $satuanBarangs = SatuanBarang::query()
            ->when($search, function ($query) use ($search) {
                $query->where('kodeSatuanBarang', 'like', '%' . $search . '%')
                    ->orWhere('namaSatuanBarang', 'like', '%' . $search . '%');
                })
            ->orderBy($filter, $sortDirection)
            ->paginate(10);
        if ( $request->query('page') > $pages = $satuanBarangs->lastPage() ) {
            return redirect(route('data-master.satuan-barang', ["page" => $pages]));
            }
        return view('data-master.satuan-barang', compact('satuanBarangs'));
        }
    /**
     * Listing all of resource
     */
    public function list( Request $request )
        {
        try {
            $search = $request->query('search');
            $limit  = (int) $request->query('limit', 10);

            // Ensure limit is a positive integer
            if ( $limit <= 0 ) {
                $limit = 10;
                }

            $satuanBarangs = SatuanBarang::query()
                ->when($search, function ($query) use ($search) {
                    $query->where('kodeSatuanBarang', 'like', '%' . $search . '%')
                        ->orWhere('namaSatuanBarang', 'like', '%' . $search . '%');
                    })
                ->limit($limit)
                ->get();

            return response()->json($satuanBarangs);
            } catch (\Exception $e) {
            return response()->json([
                'error'   => 'Failed to retrieve resources',
                'message' => $e->getMessage()
            ], 500);
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
    public function store( Request $request )
        {
        $validatedRequest = $request->validate([
            'kodeSatuanBarang' => 'required|unique:satuan_barang|max:3',
            'namaSatuaBarang'  => 'required',
        ], [
            'kodeSatuangBarang.unique'  => 'Kode Satuan Barang sudah terdaftar',
            'kodeSatuanBarang.required' => 'Kode Satuan Barang harus diisi',
            'kodeSatuanBarang.max'      => 'Kode Satuan Barang maksimal 3 karakter',
            'namaSatuanBarang.required' => 'Nama Satuan Barang harus diisi',
        ]);

        try {
            SatuanBarang::create($validatedRequest);
            return redirect(route('data-master.satuan-barang'))->with('success', 'Data Satuan Barang berhasil ditambahkan');
            } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
            }
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
            'kodeSatuanBarang' => 'required|exists:satuan_barang,kodeSatuanBarang|max:3',
            'namaSatuanBarang' => 'required',
        ], [
            'kodeSatuanBarang.exists'   => 'Kode Satuan Barang tidak ditemukan di database',
            'kodeSatuanBarang.required' => 'Kode Satuan Barang harus diisi',
            'kodeSatuanBarang.max'      => 'Kode Satuan Barang maksimal 10 karakter',
            'namaSatuanBarang.required' => 'Nama Satuan Barang harus diisi',
        ]);

        try {
            $satuan_barang = SatuanBarang::where('kodeSatuanBarang', $validatedRequest['kodeSatuanBarang'])->firstOrFail();
            $satuan_barang->update($validatedRequest);
            return redirect()->route('data-master.satuan-barang')->with('success', 'Data Satuan Barang berhasil diupdate');
            } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
            }
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

        try {
            SatuanBarang::destroy($validatedRequest['kodeSatuanBarang']);
            return redirect(route('data-master.satuan-barang'))->with('success', 'Data Satuan Barang berhasil dihapus');
            } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
            }
        }
    }
