<?php
if ( ! function_exists('generateJenisTransaksiOptions') ) {
    function generateJenisTransaksiOptions( $selectedValue = null )
        {
        $options = [
            'IMB' => 'IMB - Transaksi Perdagangan Dengan Imbal Dagang',
            'IOA' => 'IOA - Pembayaran Dilakukan Dengan Interoffice Account',
            'KMD' => 'KMD - Pembayaran Kemudian',
            'KON' => 'KON - Pembayaran Dilakukan Dengan Konsinyasi',
            'LAI' => 'LAI - Transaksi Perdagangan Atau Cara Pembayaran Lainnya',
            'PMK' => 'PMK - Pembayaran Dilakukan Dimuka',
            'RLC' => 'RLC - Pembayaran Dengan Red Clause Letter of Credit',
            'SLC' => 'SLC - Pembayaran Dengan Sight Letter Of Credit',
            'ULC' => 'ULC - Pembayaran Dengan Usance Letter Of Credit',
            'WSI' => 'WSI - Pembayaran Dilakukan Dengan Wesel Inkaso',
        ];

        $html = '';

        foreach ( $options as $value => $label ) {
            $selected = ($selectedValue == $value) ? 'selected' : '';
            $html .= "<option value=\"$value\" $selected>$label</option>";
            }

        return $html;
        }
    }
