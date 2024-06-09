<?php
if ( ! function_exists('generateJenisNilaiOptions') ) {
    function generateJenisNilaiOptions( $selectedValue = null )
        {
        $options = [
            'BTR' => 'BTR - BUKAN TRANSAKSI JUAL BELI LAINNYA',
            'CAM' => 'CAM - Barang terdiri dari barang-barang yang merupakan obyek transaksi gabungan dari dua atau lebih jenis transaksi 1 sampai dengan 10',
            'CMA' => 'CMA - BUKAN TRANSAKSI JUAL BELI BERUPA BARANG HADIAH/PROMOSI/CONTOH',
            'FTR' => 'FTR - TRANSAKSI JUAL BELI BERDASARKAN HARGA FUTURES (FUTURE PRICE), YAITU HARGA YANG BARU DAPAT DITENTUKAN SETELAH PIB DISAMPAIKAN',
            'HBH' => 'HBH - BUKAN TRANSAKSI JUAL BELI BERUPA BARANG BANTUAN/HIBAH',
            'ITM' => 'ITM - BUKAN TRANSAKSI JUAL BELI BERUPA BARANG YANG DIIMPOR OLEH INTERMEDIARY YANG TIDAK MEMBELI BARANG',
            'KON' => 'KON - BUKAN TRANSAKSI JUAL BELI BERUPA BARANG KONSINYASI',
            'LES' => 'LES - BUKAN TRANSAKSI JUAL BELI BERUPA BARANG SEWA (LEASING)',
            'NTR' => 'NTR - TRANSAKSI JUAL BELI',
            'PRO' => 'PRO - TRANSAKSI JUAL BELI MENGANDUNG PROCEEDS YANG NILAINYA BELUM DAPAT DITENTUKAN',
            'ROY' => 'ROY - TRANSAKSI JUAL BELI MENGANDUNG ROYALTI YANG NILAINYA BELUM DAPAT DITENTUKAN',
            'TIP' => 'TIP - TITIPAN',
        ];

        $html = '';

        foreach ( $options as $value => $label ) {
            $selected = ($selectedValue == $value) ? 'selected' : '';
            $html .= "<option value=\"$value\" $selected>$label</option>";
            }

        return $html;
        }
    }
