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
    public function index( Request $request )
        {
        $search     = $request->query('search');
        $sortOption = $request->query('sortOption', 'kodeJenisKemasan_asc');

        // Split the sortOption into filter and sortDirection
        list($filter, $sortDirection) = explode('_', $sortOption);

        $jenisKemasans = JenisKemasan::query()
            ->when($search, function ($query) use ($search) {
                $query->where('kodeJenisKemasan', 'like', '%' . $search . '%')
                    ->orWhere('namaKemasan', 'like', '%' . $search . '%');
                })
            ->orderBy($filter, $sortDirection)
            ->paginate(10);
        if ( $request->query('page') > $pages = $jenisKemasans->lastPage() ) {
            return redirect(route('data-master.jenis-kemasan', ["page" => $pages]));
            }
        return view('data-master.jenis-kemasan', compact('jenisKemasans'));
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

            $jenisKemasans = JenisKemasan::query()
                ->when($search, function ($query) use ($search) {
                    $query->where('kodeJenisKemasan', 'like', '%' . $search . '%')
                        ->orWhere('namaKemasan', 'like', '%' . $search . '%');
                    })
                ->limit($limit)
                ->get();

            return response()->json($jenisKemasans);
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
            'kodeJenisKemasan' => 'required|unique:jenis_kemasan|max:5',
            'namaKemasan'      => 'required',
        ], [
            'kodeJenisKemasan.unique'   => 'Kode Kemasan sudah terdaftar',
            'kodeJenisKemasan.required' => 'Kode Kemasan harus diisi',
            'kodeJenisKemasan.max'      => 'Kode Kemasan maksimal 5 karakter',
            'namaKemasan.required'      => 'Nama kemasan harus diisi',
        ]);

        try {
            JenisKemasan::create($validatedRequest);
            return redirect(route('data-master.jenis-kemasan'))->with('success', 'Data Kemasan berhasil ditambahkan');

            } catch (\Exception $th) {
            return redirect(route('data-master.jenis-kemasan'))->with('error', 'Terjadi kesalahan: ' . $th->getMessage());
            }
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
            'kodeJenisKemasan' => 'required|exists:jenis_kemasan,kodeJenisKemasan|max:5',
            'namaKemasan'      => 'required',
        ], [
            'kodeJenisKemasan.exists'   => 'Kode Kemasan tidak ditemukan di database',
            'kodeJenisKemasan.required' => 'Kode Kemasan harus diisi',
            'kodeJenisKemasan.max'      => 'Kode Kemasan maksimal 10 karakter',
            'namaKemasan.required'      => 'Nama Kemasan harus diisi',
        ]);

        try {
            $jenis_kemasan = JenisKemasan::where('kodeJenisKemasan', $validatedRequest['kodeJenisKemasan'])->firstOrFail();
            $jenis_kemasan->update($validatedRequest);
            return redirect()->route('data-master.jenis-kemasan')->with('success', 'Data Kemasan berhasil diupdate');

            } catch (\Exception $e) {
            return redirect()->route('data-master.jenis-kemasan')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());

            }
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request )
        {
        $validatedRequest = $request->validate([
            'kodeJenisKemasan' => 'required|array',
        ], [
            'kodeJenisKemasan.required' => 'Kode Kemasan harus diisi',
        ]);

        if ( ! $validatedRequest ) {
            return redirect()->back()->withErrors(['kodeJenisKemasan', 'Gagal Hapus Data Kemasan']);
            }

        try {
            JenisKemasan::destroy($validatedRequest['kodeJenisKemasan']);
            return redirect(route('data-master.jenis-kemasan'))->with('success', 'Data Kemasan berhasil dihapus');

            } catch (\Exception $e) {
            return redirect(route('data-master.jenis-kemasan'))->with('error', 'Terjadi kesalahan: ' . $e->getMessage());

            }
        }
    }
