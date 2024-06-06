<?php

namespace App\Http\Controllers\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\DataMaster\Negara;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NegaraController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request )
        {
        $search     = $request->query('search');
        $sortOption = $request->query('sortOption', 'kodeNegara_asc');

        // Pisahkan sortOption menjadi filter dan sortDirection
        list($filter, $sortDirection) = explode('_', $sortOption);

        $negaras = Negara::query()
            ->when($search, function ($query) use ($search) {
                $query->where('kodeNegara', 'like', '%' . $search . '%')
                    ->orWhere('namaNegara', 'like', '%' . $search . '%');
                })
            ->orderBy($filter, $sortDirection)
            ->paginate(10);
        if ( $request->query('page') > $pages = $negaras->lastPage() ) {
            return redirect(route('data-master.negara', ["page" => $pages]));
            }
        return view('data-master.negara', compact('negaras'));
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

            $negaras = Negara::query()
                ->when($search, function ($query) use ($search) {
                    $query->where('kodeNegara', 'like', '%' . $search . '%')
                        ->orWhere('namaNegara', 'like', '%' . $search . '%');
                    })
                ->limit($limit)
                ->get();

            return response()->json($negaras);
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
            'kodeNegara' => 'required|unique:negara|max:2',
            'namaNegara' => 'required',
        ], [
            'kodeNegara.unique'   => 'Kode Negara sudah terdaftar',
            'kodeNegara.required' => 'Kode Negara harus diisi',
            'kodeNegara.max'      => 'Kode Negara maksimal 2 karakter',
            'namaNegara.required' => 'Nama Negara harus diisi',
        ]);

        try {
            Negara::create($validatedRequest);
            return redirect(route('data-master.negara'))->with('success', 'Data Negara berhasil ditambahkan');
            } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi Kesalahan: ' . $e->getMessage()]);
            }

        }

    /**
     * Display the specified resource.
     */
    public function show( Negara $negara )
        {
        //
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Negara $negara )
        {
        //
        }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Negara $negara )
        {
        $validateRequest = $request->validate([
            'kodeNegara' => 'required|exists:negara,kodeNegara|max:2',
            'namaNegara' => 'required',
        ], [
            'kodeNegara.exists'   => 'kode Negara tidak ditemukan di database',
            'kodeNegara.required' => 'kode Negara harus diisi',
            'kodeNegara.max'      => 'kode Negara maksimal 2 karakter',
            'namaNegara.required' => 'nama Negara harus diisi',
        ]);

        try {
            $negara = Negara::where('kodeNegara', $validateRequest['kodeNegara'])->firstOrFail();
            $negara->update($validateRequest);
            return redirect(route('data-master.negara'))->with('success', 'Data Negara berhasil di update');

            } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi Kesalahan: ' . $e->getMessage()]);

            }
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request )
        {
        $validatedRequest = $request->validate([
            'kodeNegara' => 'required|array',
        ], [
            'kodeNegara.required' => 'Kode Negara harus diisi',
        ]);

        if ( ! $validatedRequest ) {
            return redirect()->back()->withErrors(['kodeNegara' => 'Gagal Hapus Data Negara']);
            }

        try {
            Negara::destroy($validatedRequest['kodeNegara']);
            return redirect(route('data-master.negara'))->with('success', 'Data Negara berhasil dihapus');

            } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi Kesalahan: ' . $e->getMessage()]);

            }
        }

    }
