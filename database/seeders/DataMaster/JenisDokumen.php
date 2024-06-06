<?php

namespace Database\Seeders\DataMaster;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisDokumen extends Seeder
    {
    /**
     * Run the database seeds.
     */
    public function run() : void
        {
        $array = [
            ['kodeJenisDokumen' => '10', 'namaDokumen' => 'RKSP'],
            ['kodeJenisDokumen' => '11', 'namaDokumen' => 'MANIFES'],
            ['kodeJenisDokumen' => '16', 'namaDokumen' => 'BC 1.6 - PEMBERITAHUAN PABEAN PENGELUARAN BARANG DARI KAWASAN PABEAN UNTUK DITIMBUN DI PUSAT LOGISTIK BERIKAT'],
            ['kodeJenisDokumen' => '20', 'namaDokumen' => 'BC 2.0 - PEMBERITAHUAN IMPOR BARANG'],
            ['kodeJenisDokumen' => '21', 'namaDokumen' => 'PIBK/IMPOR KHUSUS'],
            ['kodeJenisDokumen' => '23', 'namaDokumen' => 'BC 2.3 - PEMBERITAHUAN IMPOR BARANG UNTUK DITIMBUN DI TEMPAT PENIMBUNAN BERIKAT'],
            ['kodeJenisDokumen' => '25', 'namaDokumen' => 'BC 2.5 - PEMBERITAHUAN IMPOR BARANG DARI TEMPAT PENIMBUNAN BERIKAT'],
            ['kodeJenisDokumen' => '27', 'namaDokumen' => 'BC 2.7 - PEMBERITAHUAN PENGELUARAN UNTUK DIANGKUT DARI TEMPAT PENIMBUNAN BERIKAT KE TEMPAT PENIMBUNAN BERIKAT LAINNYA'],
            ['kodeJenisDokumen' => '28', 'namaDokumen' => 'BC 2.8 - PEMBERITAHUAN IMPOR BARANG DARI PUSAT LOGISTIK BERIKAT'],
            ['kodeJenisDokumen' => '30', 'namaDokumen' => 'BC 3.0 - PEMBERITAHUAN EKSPOR NARAMG'],
            ['kodeJenisDokumen' => '33', 'namaDokumen' => 'BC 3.3 - PEMBERITAHUAN EKSPOR BARANG MELALUI/DARI PUSAT LOGISTIK BERIKAT'],
            ['kodeJenisDokumen' => '40', 'namaDokumen' => 'BC 4.0 - PEMBERITAHUAN PEMASUKAN BARANG ASAL TEMPAT LAIN DALAM DAERAH PABEAN KE TEMPAT PENIMBUNAN BERIKAT'],
            ['kodeJenisDokumen' => '41', 'namaDokumen' => 'BC 4.1 - PEMBERITAHUAN PENGELUARAN KEMBALI BARANG ASAL TEMPAT LAIN DALAM DAERAH PABEAN DARI TEMPAT PENIMBUNAN BERIKAT'],
            ['kodeJenisDokumen' => '50', 'namaDokumen' => 'KITE'],
            ['kodeJenisDokumen' => '51', 'namaDokumen' => 'FTZ 01'],
            ['kodeJenisDokumen' => '52', 'namaDokumen' => 'FTZ 02'],
            ['kodeJenisDokumen' => '53', 'namaDokumen' => 'FTZ 03'],
            ['kodeJenisDokumen' => '65', 'namaDokumen' => 'BC 1.1 KONSOLIDASI PJT'],
            ['kodeJenisDokumen' => '111', 'namaDokumen' => 'Bank Devisa Hasil Ekspor (DHE]'],
            ['kodeJenisDokumen' => '161', 'namaDokumen' => 'PPB - PEMBERITAHUAN PERPINDAHAN BARANG ANTAR TEMPAT PENIMBUNAN DALAM SATU PUSAT LOGISTIK BERIKAT'],
            ['kodeJenisDokumen' => '217', 'namaDokumen' => 'PACKING LIST'],
            ['kodeJenisDokumen' => '246', 'namaDokumen' => 'L/C'],
            ['kodeJenisDokumen' => '261', 'namaDokumen' => 'BC 2.6.1 - PEMBERITAHUAN PENGELUARAN BARANG DARI TEMPAT PENIMBUNAN BERIKAT DENGAN JAMINAN'],
            ['kodeJenisDokumen' => '262', 'namaDokumen' => '262 BC 2.6.2 - PEMBERITAHUAN PEMASUKAN KEMBALI BARANG YANG DI KELUARKAN DARI TEMPAT PENIMBUNAN BERIKAT DENGAN JAMINAN'],
            ['kodeJenisDokumen' => '281', 'namaDokumen' => 'PPK - PEMBERITAHUAN PEMASUKAN KEMBALI BARANG ASAL PLB DARI LOKASI PENERIMA FASILITAS DI TEMPAT LAIN DALAM DAERAH PABEAN KE PLB'],
            ['kodeJenisDokumen' => '282', 'namaDokumen' => 'DOKAP PLB - PEMBERITAHUAN PENGELUARAN DENGAN DOKUMEN PELENGKAP'],
            ['kodeJenisDokumen' => '315', 'namaDokumen' => 'KONTRAK'],
            ['kodeJenisDokumen' => '331', 'namaDokumen' => 'P3BET - PEMBERITAHUAN PENGGABUNGAN DAN PEMECAHAN BARANG EKSPOR DAN TRANSHIPMENT'],
            ['kodeJenisDokumen' => '343', 'namaDokumen' => 'SHIPING ORDER'],
            ['kodeJenisDokumen' => '380', 'namaDokumen' => 'INVOICE'],
            ['kodeJenisDokumen' => '383', 'namaDokumen' => 'SSTB'],
            ['kodeJenisDokumen' => '388', 'namaDokumen' => 'FAKTUR PAJAK'],
            ['kodeJenisDokumen' => '410', 'namaDokumen' => 'SURAT SANGGUP BAYAR / SSB'],
            ['kodeJenisDokumen' => '430', 'namaDokumen' => 'BANK GARANSI'],
            ['kodeJenisDokumen' => '440', 'namaDokumen' => 'SURAT TANDA BUKTI SETOR / STBS'],
            ['kodeJenisDokumen' => '454', 'namaDokumen' => 'SSPCP / SSBC'],
            ['kodeJenisDokumen' => '455', 'namaDokumen' => 'SURAT SETORAN PAJAK (SSP]'],
            ['kodeJenisDokumen' => '456', 'namaDokumen' => 'SKB'],
            ['kodeJenisDokumen' => '457', 'namaDokumen' => 'Surat Keterangan Bebas (SKB] PPh'],
            ['kodeJenisDokumen' => '458', 'namaDokumen' => 'SURAT KETERANGAN TIDAK DIPUNGUT (SKTD] PPN'],
            ['kodeJenisDokumen' => '500', 'namaDokumen' => 'MOU PDE (Eksportir]'],
            ['kodeJenisDokumen' => '511', 'namaDokumen' => 'FTZ-01 PEMASUKAN DARI LUAR DAERAH PABEAN (IMPOR]'],
            ['kodeJenisDokumen' => '512', 'namaDokumen' => 'FTZ-01 PENGELUARAN KE LUAR DAERAH PABEAN (EKSPOR]'],
            ['kodeJenisDokumen' => '513', 'namaDokumen' => 'FTZ-01 PENGELUARAN KE TEMPAT LAIN DALAM DAERAH PABEAN'],
            ['kodeJenisDokumen' => '521', 'namaDokumen' => 'FTZ-02 PEMASUKAN ANTAR FREE TRADE ZONE DAN KAWASAN BERIKAT'],
            ['kodeJenisDokumen' => '522', 'namaDokumen' => 'FTZ-02 PENGELUARAN ANTARfree trade zone dan kawasan berikat'],
            ['kodeJenisDokumen' => '531', 'namaDokumen' => 'FTZ-03 PEMASUKAN DARI TEMPAT LAIN DALAM DAERAH PABEAN'],
            ['kodeJenisDokumen' => '640', 'namaDokumen' => 'DELIVERY ORDER'],
            ['kodeJenisDokumen' => '666', 'namaDokumen' => 'Pengecualian Dengan Surat Keputusan'],
            ['kodeJenisDokumen' => '704', 'namaDokumen' => 'MASTER B/L'],
            ['kodeJenisDokumen' => '705', 'namaDokumen' => 'B/L'],
            ['kodeJenisDokumen' => '740', 'namaDokumen' => 'AWB'],
            ['kodeJenisDokumen' => '741', 'namaDokumen' => 'MASTER AWB'],
            ['kodeJenisDokumen' => '800', 'namaDokumen' => 'SERTIFIKAT ALAT PERANGKAT TELEKOM/POSTEL'],
            ['kodeJenisDokumen' => '803', 'namaDokumen' => 'SATS LN / DEPHUT'],
            ['kodeJenisDokumen' => '805', 'namaDokumen' => 'REGISTRASI B3 / KLH'],
            ['kodeJenisDokumen' => '808', 'namaDokumen' => 'IJIN IMPOR / POLRI'],
            ['kodeJenisDokumen' => '809', 'namaDokumen' => 'SIE'],
            ['kodeJenisDokumen' => '810', 'namaDokumen' => 'SM/SPM'],
            ['kodeJenisDokumen' => '811', 'namaDokumen' => 'Sertifikat Legalitas Kayu (Dok.V-Legal]'],
            ['kodeJenisDokumen' => '812', 'namaDokumen' => 'Dok. Impor (PIB]'],
            ['kodeJenisDokumen' => '813', 'namaDokumen' => 'DOK. CUKAI (CK]'],
            ['kodeJenisDokumen' => '814', 'namaDokumen' => 'SKEP IJIN EKSPOR BERKALA'],
            ['kodeJenisDokumen' => '815', 'namaDokumen' => 'SKEP IJIN TATA NIAGA EKSPOR'],
            ['kodeJenisDokumen' => '816', 'namaDokumen' => 'DOK. EKSPOR (PEB]'],
            ['kodeJenisDokumen' => '817', 'namaDokumen' => 'Eksportir Terdaftar (ET] Depdag'],
            ['kodeJenisDokumen' => '818', 'namaDokumen' => 'Endorsement BRIK'],
            ['kodeJenisDokumen' => '819', 'namaDokumen' => 'Sertifikat Intan Kasar'],
            ['kodeJenisDokumen' => '820', 'namaDokumen' => 'Surat Persetujuan Ekspor (SPE]'],
            ['kodeJenisDokumen' => '821', 'namaDokumen' => 'Surat Tanda Registrasi UPPB'],
            ['kodeJenisDokumen' => '822', 'namaDokumen' => 'Srt Tanda Pendaftaran Pedagang Bokor SIR'],
            ['kodeJenisDokumen' => '834', 'namaDokumen' => 'SNI GULA KRISTAL MENTAH / DEPTAN'],
            ['kodeJenisDokumen' => '835', 'namaDokumen' => 'IZIN DAN/ATAU PENDAFT PESTISIDA / DEPTAN'],
            ['kodeJenisDokumen' => '836', 'namaDokumen' => 'IZIN IMPOR / DEPTAN'],
            ['kodeJenisDokumen' => '842', 'namaDokumen' => 'SNI/SPB/DEPDAG'],
            ['kodeJenisDokumen' => '843', 'namaDokumen' => 'NOMOR PELUMAS TERDAFTAR / ESDM'],
            ['kodeJenisDokumen' => '844', 'namaDokumen' => 'IZIN USAHA NIAGA/IU NIAGA TERBATAS/ESDM'],
            ['kodeJenisDokumen' => '845', 'namaDokumen' => 'REKOMENDASI IMPOR PELUMAS'],
            ['kodeJenisDokumen' => '846', 'namaDokumen' => 'SKEM'],
        ];
        DB::table('jenis_dokumen')->insert($array);
        }
    }
