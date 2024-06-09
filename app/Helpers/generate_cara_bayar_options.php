<?php
if ( ! function_exists('generateCaraBayarOptions') ) {
    function generateCaraBayarOptions( $selectedValue = null )
        {
        $options = [
            1  => '1 - BIASA/TUNAI',
            2  => '2 - BERKALA',
            3  => '3 - DENGAN JAMINAN',
            4  => '4 - PERHITUNGAN KEMUDIAN',
            5  => '5 - KONSINYASI (CONSIGNMENT)',
            6  => '6 - USANCE LETTER OF CREDIT',
            7  => '7 - RED CLAUSE LETTER OF CREDIT',
            8  => '8 - INTER-COMPANY ACCOUNT',
            9  => '9 - GABUNGAN/LAINNYA',
            10 => '10 - PEMBAYARAN KEMUDIAN (OPEN ACCOUNT) SECARA BERTAHAP',
            11 => '11 - PEMBAYARAN KEMUDIAN (OPEN ACCOUNT) SECARA TUNAI',
            12 => '12 - DILAKUKAN DI DN DENGAN PEMBAYARAN UANG TUNAI',
            13 => '13 - DILAKUKAN DI DN DENGAN PEMBAYARAN MELALUI TELEGRAPH',
            14 => '14 - DILAKUKAN TANPA PEMBAYARAN',
            15 => '15 - PEMBAYARAN DIMUKA (ADVANCE PAYMENT)',
            16 => '16 - SIGHT LETTER OF CREDIT',
            17 => '17 - INKASO (COLLECTION DRAFT)',
        ];

        $html = '';

        foreach ( $options as $value => $label ) {
            $selected = ($selectedValue == $value) ? 'selected' : '';
            $html .= "<option value=\"$value\" $selected>$label</option>";
            }

        return $html;
        }
    }
