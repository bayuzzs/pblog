<?php
if ( ! function_exists('generateJenisIdentitasOptions') ) {
    function generateJenisIdentitasOptions( $selectedValue = null )
        {
        $options = [
            0 => 'NPWP 12 DIGIT',
            1 => 'NPWP 10 DIGIT',
            2 => 'PASPOR',
            3 => 'KTP',
            4 => 'LAINNYA',
            5 => 'NPWP 15 DIGIT',
        ];

        $html = '';

        foreach ( $options as $value => $label ) {
            $selected = ($selectedValue == $value) ? 'selected' : '';
            $html .= "<option value=\"$value\" $selected>$label</option>";
            }

        return $html;
        }
    }
