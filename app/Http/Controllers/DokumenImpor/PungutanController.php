<?php

namespace App\Http\Controllers\DokumenImpor;

use App\Http\Controllers\Controller;
use App\Models\DokumenImpor\BarangTarif;
use App\Models\DokumenImpor\DokumenImpor;
use App\Models\DokumenImpor\GrandPungutan;
use Illuminate\Http\Request;

class PungutanController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index( string $nomorAju )
        {
        // $dokumenImpor = DokumenImpor::where('nomorAju', $nomorAju)->firstOrFail();
        // return view('dokumen-impor.pungutan', compact('dokumenImpor'));
        try {
            $barangTarifData = BarangTarif::whereHas('barang', function ($query) use ($nomorAju) {
                $query->where('nomorAju', $nomorAju);
                })->get();

            $groupedData = $barangTarifData->groupBy('keterangan');

            $totals = [
                'BM'    => [
                    'dibayar'              => 0,
                    'ditanggungPemerintah' => 0,
                    'ditunda'              => 0,
                    'tidakDipungut'        => 0,
                    'dibebaskan'           => 0,
                    'telahDilunasi'        => 0
                ],
                'BMT'   => [
                    'dibayar'              => 0,
                    'ditanggungPemerintah' => 0,
                    'ditunda'              => 0,
                    'tidakDipungut'        => 0,
                    'dibebaskan'           => 0,
                    'telahDilunasi'        => 0
                ],
                'CUKAI' => [
                    'dibayar'              => 0,
                    'ditanggungPemerintah' => 0,
                    'ditunda'              => 0,
                    'tidakDipungut'        => 0,
                    'dibebaskan'           => 0,
                    'telahDilunasi'        => 0
                ],
                'PPH'   => [
                    'dibayar'              => 0,
                    'ditanggungPemerintah' => 0,
                    'ditunda'              => 0,
                    'tidakDipungut'        => 0,
                    'dibebaskan'           => 0,
                    'telahDilunasi'        => 0
                ],
                'PPN'   => [
                    'dibayar'              => 0,
                    'ditanggungPemerintah' => 0,
                    'ditunda'              => 0,
                    'tidakDipungut'        => 0,
                    'dibebaskan'           => 0,
                    'telahDilunasi'        => 0
                ]
            ];

            foreach ( $groupedData as $keterangan => $items ) {
                foreach ( $items as $item ) {
                    $totals[$keterangan]['dibayar'] += (float) $item->dibayar;
                    $totals[$keterangan]['ditanggungPemerintah'] += (float) $item->ditanggungPemerintah;
                    $totals[$keterangan]['ditunda'] += (float) $item->ditunda;
                    $totals[$keterangan]['tidakDipungut'] += (float) $item->tidakDipungut;
                    $totals[$keterangan]['dibebaskan'] += (float) $item->dibebaskan;
                    $totals[$keterangan]['telahDilunasi'] += (float) $item->telahDilunasi;
                    }
                }

            foreach ( $totals as $keterangan => $data ) {
                GrandPungutan::updateOrCreate(
                    ['nomorAju' => $nomorAju, 'keterangan' => $keterangan],
                    [
                        'dibayar'              => $data['dibayar'],
                        'ditanggungPemerintah' => $data['ditanggungPemerintah'],
                        'ditunda'              => $data['ditunda'],
                        'tidakDipungut'        => $data['tidakDipungut'],
                        'dibebaskan'           => $data['dibebaskan'],
                        'telahDilunasi'        => $data['telahDilunasi'],
                    ]
                );
                }

            $dokumenImpor  = DokumenImpor::where('nomorAju', $nomorAju)->firstOrFail();
            $grandPungutan = GrandPungutan::where('nomorAju', $nomorAju)->get();

            $barangPungutans = [];

            $total = (object) [
                'telahDilunasi'        => 0,
                'dibebaskan'           => 0,
                'tidakDipungut'        => 0,
                'ditunda'              => 0,
                'ditanggungPemerintah' => 0,
                'dibayar'              => 0,
            ];

            foreach ( $grandPungutan as $pungutan ) {
                $barangPungutans[$pungutan->keterangan] = (object) [
                    'telahDilunasi'        => $pungutan->telahDilunasi,
                    'dibebaskan'           => $pungutan->dibebaskan,
                    'tidakDipungut'        => $pungutan->tidakDipungut,
                    'ditunda'              => $pungutan->ditunda,
                    'ditanggungPemerintah' => $pungutan->ditanggungPemerintah,
                    'dibayar'              => $pungutan->dibayar,
                ];

                $total->telahDilunasi += $pungutan->telahDilunasi;
                $total->dibebaskan += $pungutan->dibebaskan;
                $total->tidakDipungut += $pungutan->tidakDipungut;
                $total->ditunda += $pungutan->ditunda;
                $total->ditanggungPemerintah += $pungutan->ditanggungPemerintah;
                $total->dibayar += $pungutan->dibayar;
                }
            $barangPungutans['total'] = $total;

            return view('dokumen-impor.pungutan', compact('barangPungutans', 'dokumenImpor'));

            } catch (\Throwable $th) {
            return redirect()->route('dokumen-impor')->with('error', 'Terjadi kesalahan: ' . $th->getMessage());
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
        //
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
