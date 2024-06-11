<?php

namespace App\Http\Controllers\DokumenImpor;

use App\Http\Controllers\Controller;
use App\Models\DokumenImpor\DokumenImpor;
use App\Models\DokumenImpor\Importir;
use App\Models\DokumenImpor\NpwpPemusatan;
use App\Models\DokumenImpor\PemilikBarang;
use App\Models\DokumenImpor\Pengirim;
use App\Models\DokumenImpor\Penjual;
use Illuminate\Http\Request;

class EntitasController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( string $nomorAju )
        {
        try {
            $dokumenImpor  = DokumenImpor::where('nomorAju', $nomorAju)->firstOrFail();
            $importir      = Importir::where('nomorAju', $nomorAju)->first();
            $pemilikBarang = PemilikBarang::where('nomorAju', $nomorAju)->first();
            $npwpPemusatan = NpwpPemusatan::where('nomorAju', $nomorAju)->first();
            $pengirim      = Pengirim::with('negara')->where('nomorAju', $nomorAju)->first();
            $penjual       = Penjual::with('negara')->where('nomorAju', $nomorAju)->first();
            return view('dokumen-impor.entitas', compact(['dokumenImpor', 'importir', 'pemilikBarang', 'npwpPemusatan', 'pengirim', 'penjual']));

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
    public function store( Request $request )
        {
        $this->validateForm($request);
        try {
            $importirData      = $this->getImportir($request);
            $npwpPemusatanData = $this->getNpwpPemusatan($request);
            $pemilikBarangData = $this->getPemilikBarang($request);
            $pengirimData      = $this->getPengirim($request);
            $penjualData       = $this->getPenjual($request);

            $importir      = Importir::firstOrCreate(['nomorAju' => $request->nomorAju], $importirData);
            $npwpPemusatan = NpwpPemusatan::firstOrCreate(['nomorAju' => $request->nomorAju], $npwpPemusatanData);
            $pemilikBarang = PemilikBarang::firstOrCreate(['nomorAju' => $request->nomorAju], $pemilikBarangData);
            $pengirim      = Pengirim::firstOrCreate(['nomorAju' => $request->nomorAju], $pengirimData);
            $penjual       = Penjual::firstOrCreate(['nomorAju' => $request->nomorAju], $penjualData);

            $importir->update($importirData);
            $npwpPemusatan->update($npwpPemusatanData);
            $pemilikBarang->update($pemilikBarangData);
            $pengirim->update($pengirimData);
            $penjual->update($penjualData);

            return redirect()->route('dokumen-impor.dokumen-pendukung', ['nomorAju' => $request->nomorAju])->with('success', 'Berhasil Mengisi Data Entitas!');
            } catch (\Exception $e) {
            return redirect()->route('dokumen-impor.entitas', ['nomorAju' => $request->nomorAju])->with('error', 'Terjadi Kesalahan: ' . $e->getMessage());
            }
        }


    /**
     * Validate the Form.
     */
    public function validateForm( Request $request )
        {
        $request->validate([
            'importirNoIdentitas'         => 'required|max:20',
            'importirJenisIdentitas'      => 'required',
            'importirNama'                => 'required',
            'importirAlamat'              => 'required',
            'importirJenisApi'            => 'required',
            'importirNoApi'               => 'required|max:10',
            'npwpPemusatanNoIdentitas'    => 'required|max:20',
            'npwpPemusatanJenisIdentitas' => 'required',
            'npwpPemusatanNama'           => 'required',
            'npwpPemusatanAlamat'         => 'required',
            'pemilikBarangNoIdentitas'    => 'required|max:20',
            'pemilikBarangJenisIdentitas' => 'required',
            'pemilikBarangNama'           => 'required',
            'pemilikBarangAlamat'         => 'required',
            'pengirimNama'                => 'required',
            'pengirimAlamat'              => 'required',
            'pengirimKodeNegara'          => 'required',
            'penjualNama'                 => 'required',
            'penjualAlamat'               => 'required',
            'penjualKodeNegara'           => 'required',
        ], [
            'required' => 'Kolom :attribute harus diisi.',
            'max'      => 'Kolom :attribute tidak boleh lebih dari :max karakter.',
        ]);
        }

    /**
     * Get the importir.
     */
    public function getImportir( Request $request )
        {
        $importir = [
            'noIdentitas'    => $request->only('importirNoIdentitas')['importirNoIdentitas'],
            'jenisIdentitas' => $request->only('importirJenisIdentitas')['importirJenisIdentitas'],
            'nama'           => $request->only('importirNama')['importirNama'],
            'alamat'         => $request->only('importirAlamat')['importirAlamat'],
            'jenisApi'       => $request->only('importirJenisApi')['importirJenisApi'],
            'noApi'          => $request->only('importirNoApi')['importirNoApi']
        ];
        return $importir;
        }

    public function getNpwpPemusatan( Request $request )
        {
        $npwpPemusatan = [
            'noIdentitas'    => $request->only('npwpPemusatanNoIdentitas')['npwpPemusatanNoIdentitas'],
            'jenisIdentitas' => $request->only('npwpPemusatanJenisIdentitas')['npwpPemusatanJenisIdentitas'],
            'nama'           => $request->only('npwpPemusatanNama')['npwpPemusatanNama'],
            'alamat'         => $request->only('npwpPemusatanAlamat')['npwpPemusatanAlamat']
        ];
        return $npwpPemusatan;
        }
    public function getPenjual( Request $request )
        {
        $penjual = [
            'nama'       => $request->only('penjualNama')['penjualNama'],
            'alamat'     => $request->only('penjualAlamat')['penjualAlamat'],
            'kodeNegara' => $request->only('penjualKodeNegara')['penjualKodeNegara']
        ];
        return $penjual;
        }
    public function getPengirim( Request $request )
        {
        $pengirim = [
            'nama'       => $request->only('pengirimNama')['pengirimNama'],
            'alamat'     => $request->only('pengirimAlamat')['pengirimAlamat'],
            'kodeNegara' => $request->only('pengirimKodeNegara')['pengirimKodeNegara']
        ];
        return $pengirim;
        }
    public function getPemilikBarang( Request $request )
        {
        $pemilikBarang = [
            'noIdentitas'    => $request->only('pemilikBarangNoIdentitas')['pemilikBarangNoIdentitas'],
            'jenisIdentitas' => $request->only('pemilikBarangJenisIdentitas')['pemilikBarangJenisIdentitas'],
            'nama'           => $request->only('pemilikBarangNama')['pemilikBarangNama'],
            'alamat'         => $request->only('pemilikBarangAlamat')['pemilikBarangAlamat']
        ];
        return $pemilikBarang;
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
    public function destroy( string $id )
        {
        //
        }
    }
