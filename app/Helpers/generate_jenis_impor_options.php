<?php
if ( ! function_exists('generateJenisImporOptions') ) {
    function generateJenisImporOptions( $selectedValue = null )
        {
        $options = [
            1 => '1 - UNTUK DIPAKAI',
            2 => '2 - SEMENTARA',
            3 => '3 - REIMPOR',
            4 => '4 - TPB',
            5 => '5 - PELAYANAN SEGERA',
            6 => '6 - VOORUITSLAG',
            7 => '7 - GABUNGAN',
        ];

        $html = '';

        foreach ( $options as $value => $label ) {
            $selected = ($selectedValue == $value) ? 'selected' : '';
            $html .= "<option value=\"$value\" $selected>$label</option>";
            }

        return $html;
        }
    }