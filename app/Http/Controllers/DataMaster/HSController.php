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
    public function index( Request $request )
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
        if ( $request->query('page') > $pages = $HSs->lastPage() ) {
            return redirect(route('data-master.hs', ["page" => $pages]));
            }
        return view('data-master.hs', compact('HSs'));
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

            $HSs = HS::query()
                ->when($search, function ($query) use ($search) {
                    $query->where('kodeHS', 'like', '%' . $search . '%')
                        ->orWhere('uraianBarang', 'like', '%' . $search . '%');
                    })
                ->limit($limit)
                ->get();

            return response()->json($HSs);
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
            'kodeHS'       => 'required|unique:hs|max:10',
            'uraianBarang' => 'required',
            'pphApi'       => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
            'pphNonApi'    => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
        ], [
            'kodeHS.unique'         => 'Kode HS sudah terdaftar',
            'kodeHS.required'       => 'Kode HS harus diisi',
            'kodeHS.max'            => 'Kode HS maksimal 10 karakter',
            'uraianBarang.required' => 'Uraian harus diisi',
            'pphApi.required'       => 'PPH API harus diisi',
            'pphApi.regex'          => 'PPH API harus berupa angka dengan maksimal dua angka di belakang koma',
            'pphNonApi.required'    => 'PPH Non-API harus diisi',
            'pphNonApi.regex'       => 'PPH Non-API harus berupa angka dengan maksimal dua angka di belakang koma',
        ]);


        try {
            HS::create($validatedRequest);
            return redirect(route('data-master.hs'))->with('success', 'Data HS berhasil ditambahkan');
            } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi Kesalahan: ' . $e->getMessage()]);
            }
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
            'kodeHS'       => 'required|exists:hs|max:10',
            'uraianBarang' => 'required',
            'pphApi'       => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
            'pphNonApi'    => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
        ], [
            'kodeHS.unique'         => 'Kode HS sudah terdaftar',
            'kodeHS.required'       => 'Kode HS harus diisi',
            'kodeHS.max'            => 'Kode HS maksimal 10 karakter',
            'uraianBarang.required' => 'Uraian harus diisi',
            'pphApi.required'       => 'PPH API harus diisi',
            'pphApi.regex'          => 'PPH API harus berupa angka dengan maksimal dua angka di belakang koma',
            'pphNonApi.required'    => 'PPH Non-API harus diisi',
            'pphNonApi.regex'       => 'PPH Non-API harus berupa angka dengan maksimal dua angka di belakang koma',
        ]);

        try {
            $hS = HS::where('kodeHS', $validatedRequest['kodeHS'])->firstOrFail();
            $hS->update($validatedRequest);
            return redirect()->route('data-master.hs')->with('success', 'Data HS berhasil diupdate');
            } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
            }
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

        try {
            HS::destroy($validatedRequest['kodeHS']);
            return redirect(route('data-master.hs'))->with('success', 'Data HS berhasil di hapus');
            } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $th->getMessage()]);
            }
        }
    }
