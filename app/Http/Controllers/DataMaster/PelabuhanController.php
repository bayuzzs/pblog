<?php

namespace App\Http\Controllers\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\DataMaster\Pelabuhan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PelabuhanController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : View
        {
        $search     = $request->query('search');
        $sortOption = $request->query('sortOption', 'kodePelabuhan_asc');

        // Split the sortOption into filter and sortDirection
        list($filter, $sortDirection) = explode('_', $sortOption);

        $Pelabuhans = Pelabuhan::query()
            ->when($search, function ($query) use ($search) {
                $query->where('kodePelabuhan', 'like', '%' . $search . '%');
                })
            ->orderBy($filter, $sortDirection)
            ->paginate(10);

        return view('data-master.pelabuhan', compact('Pelabuhans'));
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
                'kodePelabuhan'              => 'required|unique:pelabuhan|max:4',
                'namaPelabuhan'  => 'required',
            ], [
                'kodePelabuhan.unique'                => 'Kode Pelabuhan sudah terdaftar',
                'kodePelabuhan.required'              => 'Kode Pelabuhan harus diisi',
                'kodePelabuhan.max'                   => 'Kode Pelabuhan maksimal 10 karakter',
                'namaPelabuhan.required'              => 'Nama Pelabuhan harus diisi',
            ]);
    
            Pelabuhan::create($validatedRequest);
    
            return redirect(route('data-master.pelabuhan'))->with('success', 'Data Pelabuhan berhasil ditambahkan');
        //
        }

    /**
     * Display the specified resource.
     */
    public function show( Pelabuhan $pelabuhan )
        {
        //
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Pelabuhan $pelabuhan )
        {
        //
        }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Pelabuhan $pelabuhan )
        {
            $validatedRequest = $request->validate([
                'kodePelabuhan'              => 'required|exists:pelabuhan,kodePelabuhan|max:4',
                'namaPelabuhan'  => 'required',
            ], [
                'kodePelabuhan.exists'                => 'Kode Pelabuhan tidak ditemukan di database',
                'kodePelabuhan.required'              => 'Kode Pelabuhan harus diisi',
                'kodePelabuhan.max'                   => 'Kode Pelabuhan maksimal 4 karakter',
                'namaPelabuhan.required'            => 'Nama Pelabuhan harus diisi',
            ]);
    
            // Find the HS model by kodeHS
            $pelabuhan = Pelabuhan::where('kodePelabuhan', $validatedRequest['kodePelabuhan'])->firstOrFail();
    
            // Update the HS model with validated data
            $pelabuhan->update($validatedRequest);
    
            // Return a response or redirect as needed
            return redirect()->route('data-master.pelabuhan')->with('success', 'Data Pelabuhan berhasil diupdate');
        //
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request )
        {
            $validatedRequest = $request->validate([
                'kodePelabuhan' => 'required|array',
            ], [
                'kodePelabuhan.required' => 'Kode Pelabuhan harus diisi',
            ]);
    
            if ( ! $validatedRequest ) {
                return redirect()->back()->withErrors(['kodePelabuhan', 'Gagal Hapus Data Pelabuhan']);
                }
    
            Pelabuhan::destroy($validatedRequest['kodePelabuhan']);
            return redirect(route('data-master.pelabuhan'))->with('success', 'Data Pelabuhan berhasil di hapus');
        //
        }
    }
