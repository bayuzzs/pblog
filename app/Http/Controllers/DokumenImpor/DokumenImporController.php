<?php

namespace App\Http\Controllers\DokumenImpor;

use App\Http\Controllers\Controller;
use App\Models\DokumenImpor\DokumenImpor;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DokumenImporController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request )
        {
        $search     = $request->query('search');
        $sortOption = $request->query('sortOption', 'nomorAju_asc');

        // Split the sortOption into filter and sortDirection
        list($filter, $sortDirection) = explode('_', $sortOption);

        $dokumenImpors = DokumenImpor::query()
            ->with('kantor')
            ->when($search, function ($query) use ($search) {
                $query->where('nomorAju', 'like', '%' . $search . '%');
                })
            ->where('npwp', '=', auth('pengimpor')->user()->npwp)
            ->orderBy($filter, $sortDirection)
            ->paginate(10);
        if ( $request->query('page') > $pages = $dokumenImpors->lastPage() ) {
            return redirect(route('dokumen-impor.dokumen-impor', ["page" => $pages]));
            }
        return view('dokumen-impor.dokumen-impor', compact('dokumenImpors'));
        }

    /**
     * Redirect the route.
     */
    public function redirect( Request $request, string $nomorAju )
        {
        return redirect(route('dokumen-impor.header', ['nomorAju' => $nomorAju]));
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
        $validated = $request->validate([
            'jenisPemberitahuan' => 'required',
            'asalBarang'         => 'required',
            'tujuanBarang'       => 'required',
            'jenisDokumen'       => 'required',
            'isBerwujud'         => 'required|boolean',
        ], [
            'jenisPemberitahuan.required' => 'Harap Isi Jenis Pemberitahuan',
            'asalBarang.required'         => 'Harap Isi Asal Barang',
            'tujuanBarang.required'       => 'Harap Isi Tujuan Barang',
            'jenisDokumen.required'       => 'Harap Isi Jenis Dokumen',
            'isBerwujud.required'         => 'Harap Isi Tipe Dokumen',
        ]);
        try {
            $nomorAju = generateNomorAju();
            $npwp     = (string) Auth('pengimpor')->user()->npwp;
            DokumenImpor::create([...$validated, 'nomorAju' => $nomorAju, 'npwp' => $npwp]);
            return redirect()->route('dokumen-impor.header', ['nomorAju' => $nomorAju])->with('success', 'Berhasil Membuat Dokumen! silahkan isi data Header');
            } catch (\Exception $th) {
            return redirect()->back()->withErrors(['error' => 'Terjadi Kesalahan: ' . $th->getMessage()]);
            }
        }

    /**
     * Display the specified resource.
     */
    public function show( string $id )
        {
        //
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id )
        {
        //
        }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id )
        {
        //
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request )
        {
        $validatedRequest = $request->validate([
            'nomorAju' => 'required|array',
        ], [
            'nomorAju.required' => 'Nomor Aju harus dipilih',
        ]);

        if ( ! $validatedRequest ) {
            return redirect()->back()->with('error', 'Dokumen Impor Tidak Ditemukan');
            }

        try {
            DokumenImpor::destroy($validatedRequest['nomorAju']);
            return redirect()->back()->with('success', 'Dokumen Impor Berhasil Dihapus');

            } catch (\Exception $th) {
            return redirect()->back()->withErrors(['error' => 'Terjadi Kesalahan: ' . $th->getMessage()]);
            }
        }
    }
