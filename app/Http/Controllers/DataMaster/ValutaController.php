<?php

namespace App\Http\Controllers\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\DataMaster\Valuta;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ValutaController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request ) : View
        {
        $search     = $request->query('search');
        $sortOption = $request->query('sortOption', 'kodeValuta_asc');

        // Split the sortOption into filter and sortDirection
        list($filter, $sortDirection) = explode('_', $sortOption);

        $valutas = Valuta::query()
            ->when($search, function ($query) use ($search) {
                $query->where('kodeValuta', 'like', '%' . $search . '%');
                })
            ->orderBy($filter, $sortDirection)
            ->paginate(10);

        return view('data-master.valuta', compact('valutas'));
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
            'kodeValuta' => 'required|unique:valuta|max:3',
            'namaValuta' => 'required',
            'kurs'       => 'required',
        ], [
            'kodeValuta.unique'   => 'Kode Valuta sudah terdaftar',
            'kodeValuta.required' => 'Kode Valuta harus diisi',
            'kodeValuta.max'      => 'Kode Valuta maksimal 10 karakter',
            'namaValuta.required' => 'Nama Valuta harus diisi',
            'kurs.required'       => 'kurs harus diisi',
        ]);

        try {
            Valuta::create($validatedRequest);
            return redirect(route('data-master.valuta'))->with('success', 'Data Valuta berhasil ditambahkan');
            } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
            }
        }

    /**
     * Display the specified resource.
     */
    public function show( Valuta $valuta )
        {
        //
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Valuta $valuta )
        {
        //
        }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Valuta $valuta )
        {
        $validatedRequest = $request->validate([
            'kodeValuta' => 'required|exists:valuta,kodeValuta|max:3',
            'namaValuta' => 'required',
            'kurs'       => 'required',
        ], [
            'kodeValuta.exists'   => 'Kode Valuta tidak ditemukan di database',
            'kodeValuta.required' => 'Kode Valuta harus diisi',
            'kodeValuta.max'      => 'Kode Valuta maksimal 10 karakter',
            'namaValuta.required' => 'Nama Valuta harus diisi',
            'kurs.required'       => 'Kurs harus diisi',
        ]);

        try {
            $valuta = Valuta::where('kodeValuta', $validatedRequest['kodeValuta'])->firstOrFail();
            $valuta->update($validatedRequest);
            return redirect()->route('data-master.valuta')->with('success', 'Data Valuta berhasil diupdate');
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
            'kodeValuta' => 'required|array',
        ], [
            'kodeValuta.required' => 'Kode Valuta harus diisi',
        ]);

        if ( ! $validatedRequest ) {
            return redirect()->back()->withErrors(['kodeValuta', 'Gagal Hapus Data Valuta']);
            }

        try {
            Valuta::destroy($validatedRequest['kodeValuta']);
            return redirect(route('data-master.valuta'))->with('success', 'Data Valuta berhasil dihapus');
            } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
            }
        }
    }
