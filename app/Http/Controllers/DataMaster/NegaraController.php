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
    public function index(Request $request): View
{
    $search = $request->query('search');
    $sortOption = $request->query('sortOption', 'kodeNegara_asc');

    // Pisahkan sortOption menjadi filter dan sortDirection
    list($filter, $sortDirection) = explode('_', $sortOption);

    $Negaras = Negara::query()
        ->when($search, function ($query) use ($search) {
            $query->where('kodeNegara', 'like', '%' . $search . '%');
        })
        ->orderBy($filter, $sortDirection)
        ->paginate(10);

    return view('data-master.negara', compact('Negaras'));
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
        'kodeNegara'              => 'required|unique:negara|max:10',
        'namaNegara'              => 'required',
    ], [
        'kodeNegara.unique'                => 'Kode Negara sudah terdaftar',
        'kodeNegara.required'              => 'Kode Negara harus diisi',
        'kodeNegara.max'                   => 'Kode Negara maksimal 2 karakter',
        'namaNegara.required'            => 'Nama Negara harus diisi',
    ]);

    Negara::create($validatedRequest);

    return redirect(route('data-master.negara'))->with('success', 'Data Negara berhasil ditambahkan');
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
                'kodeNegara'              => 'required|exists:negara,kodeNegara|max:2',
                'namaNegara'              => 'required',
            ], [
                'kodeNegara.exists'     =>'kode Negara tidak ditemukan di database',
                'kodeNegara.required'   =>'kode Negara harus diisi',
                'kodeNegara.max'        =>'kode Negara maksimal 2 karakter',
                'namaNegara.required'   =>'nama Negara harus diisi',
            ]);
        //Find the Negara  model by kodeNegara
        $negara = Negara::where('kodeNegara', $validateRequest['kodeNegara'])->firstOrFail();
        $negara->update($validateRequest); //Update the Negara model with validated data
        //return a response or redirect as needed
        return redirect(route('data-master.negara'))->with('success', 'Data Negara berhasil di update');
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
            return redirect()->back()->withErrors(['kodeNegara', 'Gagal Hapus Data Negara']);
            }

        Negara::destroy($validatedRequest['kodeNegara']);
        return redirect(route('data-master.negara'))->with('success', 'Data Negara berhasil di hapus');
        //
        }
    }
