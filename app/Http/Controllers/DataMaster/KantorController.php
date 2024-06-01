<?php

namespace App\Http\Controllers\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\DataMaster\Kantor;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class KantorController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : View
        {
        $search     = $request->query('search');
        $sortOption = $request->query('sortOption', 'kodeKantor_asc');

        // Split the sortOption into filter and sortDirection
        list($filter, $sortDirection) = explode('_', $sortOption);

        $Kantors = Kantor::query()
            ->when($search, function ($query) use ($search) {
                $query->where('kodeKantor', 'like', '%' . $search . '%');
                })
            ->orderBy($filter, $sortDirection)
            ->paginate(10);
    return view('data-master.kantor', compact('Kantors'));
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
                'kodeKantor'              => 'required|unique:kantor|max:6',
                'namaKantor'  => 'required',
            ], [
                'kodeKantor.unique'                => 'Kode Kantor sudah terdaftar',
                'kodeKantor.required'              => 'Kode Kantor harus diisi',
                'kodeKantor.max'                   => 'Kode Kantor maksimal 10 karakter',
                'namaKantor.required'            => 'Nama Kantor harus diisi',
            ]);
    
            Kantor::create($validatedRequest);
    
            return redirect(route('data-master.kantor'))->with('success', 'Data Kantor berhasil ditambahkan');
        //
        }

    /**
     * Display the specified resource.
     */
    public function show( Kantor $kantor )
        {
        //
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Kantor $kantor )
        {
        //
        }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Kantor $kantor )
        {
            $validatedRequest = $request->validate([
                'kodeKantor'              => 'required|exists:kantor,kodeKantor|max:6',
                'namaKantor'  => 'required',
            ], [
                'kodeKantor.exists'                => 'Kode Kantor tidak ditemukan di database',
                'kodeKantor.required'              => 'Kode Kantor harus diisi',
                'kodeKantor.max'                   => 'Kode Kantor maksimal 6 karakter',
                'namaKantor.required'            => 'Nama Kantor harus diisi'
            ]);
    
            // Find the HS model by kodeHS
            $kantors = Kantor::where('kodeKantor', $validatedRequest['kodeKantor'])->firstOrFail();
    
            // Update the HS model with validated data
            $kantor->update($validatedRequest);
    
            // Return a response or redirect as needed
            return redirect()->route('data-master.kantor')->with('success', 'Data Kantor berhasil diupdate');  
        //
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request )
        {
            $validatedRequest = $request->validate([
                'kodeKantor' => 'required|array',
            ], [
                'kodeKantor.required' => 'Kode Kantor harus diisi',
            ]);
    
            if ( ! $validatedRequest ) {
                return redirect()->back()->withErrors(['kodeKantor', 'Gagal Hapus Data Kantor']);
                }
    
            Kantor::destroy($validatedRequest['kodeKantor']);
            return redirect(route('data-master.kantor'))->with('success', 'Data Kantor berhasil di hapus');
        //
        }
    }
