<?php
if ( ! function_exists('generateTipeKontainerOptions') ) {
    function generateTipeKontainerOptions( $selectedValue = null )
        {
        $options = [
            1  => '1 - General/Dry Cargo',
            2  => '2 - Tunne Type',
            3  => '3 - Open Top Steel',
            4  => '4 - Flat Rack',
            5  => '5 - Reefer/Refregete',
            6  => '6 - Barge Container',
            7  => '7 - Bulk Container',
            8  => '8 - Isotank',
            99 => '99 - Lain-lain',
        ];

        $html = '';

        foreach ( $options as $value => $label ) {
            $selected = ($selectedValue == $value || $value == 1) ? 'selected' : '';
            $html .= "<option value=\"$value\" $selected>$label</option>";
            }

        return $html;
        }
    }
