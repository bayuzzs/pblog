<?php

namespace App\Http\Controllers\DokumenImpor;

use App\Http\Controllers\Controller;
use App\Models\DokumenImpor\DokumenImpor;
use App\Models\DokumenImpor\DokumenPendukung;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DokumenPendukungController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request, string $nomorAju )
        {
        try {
            $dokumenImpor = DokumenImpor::where('nomorAju', $nomorAju)->firstOrFail();

            $search                       = $request->query('search');
            $sortOption                   = $request->query('sortOption', 'dokumenPendukungId_asc');
            list($filter, $sortDirection) = explode('_', $sortOption);

            $dokumenPendukungs = DokumenPendukung::query()
                ->when($search, function ($query) use ($search) {
                    $query->where('dokumenPendukungId', 'like', '%' . $search . '%')
                        ->orWhere('namaDokumen', 'like', '%' . $search . '%');
                    })
                ->where('nomorAju', $nomorAju)
                ->orderBy($filter, $sortDirection)
                ->paginate(10);

            if ( $request->query('page') > $pages = $dokumenPendukungs->lastPage() ) {
                return redirect(route('dokumen-impor.dokumen-pendukung', ["nomorAju" => $nomorAju, "page" => $pages]));
                }

            return view('dokumen-impor.dokumen-pendukung', compact('dokumenImpor', 'dokumenPendukungs'));
            } catch (\Exception $th) {
            return redirect(route('dokumen-impor'))->with('error', 'Terjadi Kesalahan : ' . $th->getMessage());

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
    public function store( Request $request, string $nomorAju )
        {
        $validated = $request->validate([
            "seri"             => "required",
            "kodeJenisDokumen" => "required",
            "nomor"            => "required",
            "tanggal"          => "required",
        ], [
            "required" => "Atribut :attribute harus diisi",
        ]);
        try {
            DokumenPendukung::create([...$validated, "nomorAju" => $nomorAju]);
            return redirect()->back()->with(['success' => 'Berhasil Mengisi Data Dokumen Pendukung!']);

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
    public function update( Request $request, string $nomorAju )
        {
        $validated = $request->validate([
            "seri"               => "required",
            "dokumenPendukungId" => "required",
            "kodeJenisDokumen"   => "required",
            "nomor"              => "required",
            "tanggal"            => "required",
        ], [
            "required" => "Atribut :attribute harus diisi",
        ]);

        try {
            $dokumenPendukung = DokumenPendukung::where('dokumenPendukungId', $validated['dokumenPendukungId'])->firstOrFail();
            $dokumenPendukung->update($validated);
            return redirect(route('dokumen-impor.dokumen-pendukung', ["nomorAju" => $nomorAju]))->with('success', 'Data Dokumen Pendukung berhasil di perbarui');

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
            'dokumenPendukungId' => 'required|array',
        ], [
            'dokumenPendukungId.required' => 'Harap Pilih Dokumen Pendukung',
        ]);

        if ( ! $validatedRequest ) {
            return redirect()->back()->with(['error' => 'Gagal Hapus Dokumen Pendukung']);
            }

        try {
            DokumenPendukung::destroy($validatedRequest['dokumenPendukungId']);
            return redirect(route('dokumen-impor.dokumen-pendukung', ["nomorAju" => $request->nomorAju]))->with('success', 'Data Dokumen Pendukung berhasil dihapus');

            } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi Kesalahan: ' . $e->getMessage()]);

            }
        }
    }
