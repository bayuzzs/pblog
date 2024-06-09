<?php
if ( ! function_exists('generateKondisiBarangOptions') ) {
    function generateKondisiBarangOptions( $selectedValue = null )
        {
        $options = [
            1 => '1 - Baru',
            2 => '2 - Bukan Baru',
            3 => '3 - Baik',
            4 => '4 - Segar',
            5 => '5 - Beku',
            6 => '6 - Baik/Baru',
            7 => '7 - Baik/Beku',
            8 => '8 - Baik/Bekas',
        ];

        $html = '';

        foreach ( $options as $value => $label ) {
            $selected = ($selectedValue == $value) ? 'selected' : '';
            $html .= "<option value=\"$value\" $selected>$label</option>";
            }

        return $html;
        }
    }
