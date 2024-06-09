<?php
if ( ! function_exists('generateCaraAngkutOptions') ) {
    function generateCaraAngkutOptions( $selectedValue = null )
        {
        $options = [
            1 => '1 - LAUT',
            2 => '2 - KERETA API',
            3 => '3 - DARAT',
            4 => '4 - UDARA',
            5 => '5 - POS',
            6 => '6 - MULTIMODA',
            7 => '7 - INSTALASI / PIPA',
            8 => '8 - PERAIRAN',
            9 => '9 - LAINNYA',
        ];

        $html = '';

        foreach ( $options as $value => $label ) {
            $selected = ($selectedValue == $value) ? 'selected' : '';
            $html .= "<option value=\"$value\" $selected>$label</option>";
            }

        return $html;
        }
    }
