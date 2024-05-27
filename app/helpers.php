<?php

if ( ! function_exists('getInitials') ) {
    function getInitials( $namaLengkap )
        {
        $namaArray = explode(' ', $namaLengkap); // Memecah nama menjadi array berdasarkan spasi
        $inisial   = '';

        foreach ( $namaArray as $key => $nama ) {
            if ( $key < 2 ) { // Mengambil maksimal 2 kata pertama
                $inisial .= strtoupper(substr($nama, 0, 1)); // Mengambil huruf pertama dan mengubahnya menjadi huruf besar
                }
            }

        return $inisial; // Mengembalikan inisial
        }
    }
