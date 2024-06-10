<?php

namespace App\Http\Controllers\DokumenImpor;

use App\Http\Controllers\Controller;
use App\Models\DokumenImpor\Barang;
use App\Models\DokumenImpor\BarangTarif;
use App\Models\DokumenImpor\DokumenImpor;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BarangController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( string $nomorAju )
        {
        try {
            $dokumenImpor = DokumenImpor::where('nomorAju', $nomorAju)->firstOrFail();
            $barangs      = Barang::where('nomorAju', $nomorAju)->orderBy('barangId', 'asc')->get()->all();

            return view('dokumen-impor.barang', compact(['dokumenImpor', 'barangs']));

            } catch (\Exception $th) {
            return redirect(route('dokumen-impor'))->with('error', 'Terjadi Kesalahan : ' . $th->getMessage());

            }
        }

    public function indexTambah( string $nomorAju )
        {
        try {
            $dokumenImpor = DokumenImpor::where('nomorAju', $nomorAju)->firstOrFail();
            return view('dokumen-impor.barang-tambah', compact('dokumenImpor'));

            } catch (\Throwable $th) {
            return redirect(route('dokumen-impor'))->with('error', 'Terjadi Kesalahan : ' . $th->getMessage());

            }
        }

    public function indexEdit( string $nomorAju, string $barangId )
        {
        try {
            $dokumenImpor = DokumenImpor::where('nomorAju', $nomorAju)->firstOrFail();

            $barang = Barang::where('barangId', $barangId)->firstOrFail();

            $bm    = BarangTarif::where(['barangId' => $barangId, 'keterangan' => 'BM'])->firstOrFail();
            $bmt   = BarangTarif::where(['barangId' => $barangId, 'keterangan' => 'BMT'])->firstOrFail();
            $cukai = BarangTarif::where(['barangId' => $barangId, 'keterangan' => 'CUKAI'])->firstOrFail();
            $pph   = BarangTarif::where(['barangId' => $barangId, 'keterangan' => 'PPH'])->firstOrFail();
            $ppn   = BarangTarif::where(['barangId' => $barangId, 'keterangan' => 'PPN'])->firstOrFail();

            return view('dokumen-impor.barang-edit', compact('dokumenImpor', 'barang', 'bm', 'bmt', 'cukai', 'pph', 'ppn'));

            } catch (\Throwable $th) {
            return redirect(route('dokumen-impor'))->with('error', 'Terjadi Kesalahan: ' . $th->getMessage());

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
     * This method for create or update data
     */
    public function store( Request $request, string $nomorAju )
        {
        [$barang, $bm, $bmt, $cukai, $pph, $ppn] = $this->validateRequest($request);

        try {
            $barangData = [...$barang, "nomorAju" => $nomorAju];
            $bmData     = [...$bm, "keterangan" => "BM"];
            $bmtData    = [...$bmt, "keterangan" => "BMT"];
            $cukaiData  = [...$cukai, "keterangan" => "CUKAI"];
            $pphData    = [...$pph, "keterangan" => "PPH"];
            $ppnData    = [...$ppn, "keterangan" => "PPN"];

            $barangModel = Barang::create($barangData);

            BarangTarif::create(['barangId' => $barangModel->barangId, 'keterangan' => 'BM'] + $bmData);
            BarangTarif::create(['barangId' => $barangModel->barangId, 'keterangan' => 'BMT'] + $bmtData);
            BarangTarif::create(['barangId' => $barangModel->barangId, 'keterangan' => 'CUKAI'] + $cukaiData);
            BarangTarif::create(['barangId' => $barangModel->barangId, 'keterangan' => 'PPH'] + $pphData);
            BarangTarif::create(['barangId' => $barangModel->barangId, 'keterangan' => 'PPN'] + $ppnData);

            return redirect()->route('dokumen-impor.barang', ['nomorAju' => $nomorAju])->with('success', 'Data berhasil ditambahkan');
            } catch (\Throwable $th) {
            return redirect()->route('dokumen-impor.barang', ['nomorAju' => $nomorAju])->with('error', 'Terjadi kesalahan: ' . $th->getMessage());
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
        [$barang, $bm, $bmt, $cukai, $pph, $ppn] = $this->validateRequest($request);

        try {
            $barangData = [...$barang, "nomorAju" => $nomorAju];
            $bmData     = [...$bm, "keterangan" => "BM"];
            $bmtData    = [...$bmt, "keterangan" => "BMT"];
            $cukaiData  = [...$cukai, "keterangan" => "CUKAI"];
            $pphData    = [...$pph, "keterangan" => "PPH"];
            $ppnData    = [...$ppn, "keterangan" => "PPN"];

            $barangModel = Barang::where('nomorAju', $nomorAju)->firstOrFail();
            $barangModel->update($barangData);

            BarangTarif::where(['barangId' => $barangModel->barangId, 'keterangan' => 'BM'])->update($bmData);
            BarangTarif::where(['barangId' => $barangModel->barangId, 'keterangan' => 'BMT'])->update($bmtData);
            BarangTarif::where(['barangId' => $barangModel->barangId, 'keterangan' => 'CUKAI'])->update($cukaiData);
            BarangTarif::where(['barangId' => $barangModel->barangId, 'keterangan' => 'PPH'])->update($pphData);
            BarangTarif::where(['barangId' => $barangModel->barangId, 'keterangan' => 'PPN'])->update($ppnData);

            return redirect()->route('dokumen-impor.barang', ['nomorAju' => $nomorAju])->with('success', 'Data berhasil diperbarui');
            } catch (\Throwable $th) {
            return redirect()->route('dokumen-impor.barang', ['nomorAju' => $nomorAju])->with('error', 'Terjadi kesalahan: ' . $th->getMessage());
            }
        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request, string $nomorAju )
        {
        try {
            $barangModel = Barang::where('nomorAju', $nomorAju)->where('barangId', $request->barangId)->firstOrFail();
            $barangModel->delete();

            return redirect()->route('dokumen-impor.barang', ['nomorAju' => $nomorAju])->with('success', 'Data berhasil dihapus');
            } catch (\Throwable $th) {
            return redirect()->route('dokumen-impor.barang', ['nomorAju' => $nomorAju])->with('error', 'Terjadi kesalahan: ' . $th->getMessage());
            }
        }


    public function validateRequest( Request $request )
        {
        $barang = $request->validate([
            "kodeHS"               => "required",
            "pernyataanLartas"     => "required",
            "kodeBarang"           => "required",
            "uraian"               => "required",
            "merk"                 => "required",
            "tipe"                 => "required",
            "ukuran"               => "required|decimal:0,2",
            "spesifikasiLain"      => "required",
            "kondisiBarang"        => "required",
            "kodeNegara"           => "required",
            "beratBersih"          => "required|decimal:0,4",
            "nilaiSatuan"          => "required",
            "kodeSatuanBarang"     => "required",
            "nilaiKemasan"         => "required",
            "kodeJenisKemasan"     => "required",
            "amountDAT"            => "required|decimal:0,4",
            "jenisNilai"           => "required",
            "jatuhTempo"           => "required",
            "voluntaryDeclaration" => "required|decimal:0,4",
            "biayaTambahanDiskon"  => "required|decimal:0,2",
            "fob"                  => "required|decimal:0,4",
            "hargaSatuan"          => "required|decimal:0,4",
            "freight"              => "required|decimal:0,2",
            "asuransi"             => "required|decimal:0,4",
            "cif"                  => "required|decimal:0,2",
        ], [
            "required" => ":attribute harus diisi",
            "numeric"  => ":attribute harus berupa angka",
            "decimal"  => ":attribute harus berupa angka dengan (angka dibelakang koma harus bernilai :decimal)",
        ]);

        $bm = [
            "dibayar"              => request("BMDibayar"),
            "ditanggungPemerintah" => request("BMDitanggungPemerintah"),
            "ditunda"              => request("BMDitunda"),
            "tidakDipungut"        => request("BMTidakDipungut"),
            "dibebaskan"           => request("BMDibebaskan"),
            "telahDilunasi"        => request("BMTelahDilunasi"),
        ];

        $bmt = [
            "dibayar"              => request("BMTDibayar"),
            "ditanggungPemerintah" => request("BMTDitanggungPemerintah"),
            "ditunda"              => request("BMTDitunda"),
            "tidakDipungut"        => request("BMTTidakDipungut"),
            "dibebaskan"           => request("BMTDibebaskan"),
            "telahDilunasi"        => request("BMTTelahDilunasi"),
        ];

        $cukai = [
            "dibayar"              => request("CUKAIDibayar"),
            "ditanggungPemerintah" => request("CUKAIDitanggungPemerintah"),
            "ditunda"              => request("CUKAIDitunda"),
            "tidakDipungut"        => request("CUKAITidakDipungut"),
            "dibebaskan"           => request("CUKAIDibebaskan"),
            "telahDilunasi"        => request("CUKAITelahDilunasi"),
        ];

        $pph = [
            "dibayar"              => request("PPHDibayar"),
            "ditanggungPemerintah" => request("PPHDitanggungPemerintah"),
            "ditunda"              => request("PPHDitunda"),
            "tidakDipungut"        => request("PPHTidakDipungut"),
            "dibebaskan"           => request("PPHDibebaskan"),
            "telahDilunasi"        => request("PPHTelahDilunasi"),
        ];

        $ppn = [
            "dibayar"              => request("PPNDibayar"),
            "ditanggungPemerintah" => request("PPNDitanggungPemerintah"),
            "ditunda"              => request("PPNDitunda"),
            "tidakDipungut"        => request("PPNTidakDipungut"),
            "dibebaskan"           => request("PPNDibebaskan"),
            "telahDilunasi"        => request("PPNTelahDilunasi"),
        ];
        return [$barang, $bm, $bmt, $cukai, $pph, $ppn];
        }
    }
