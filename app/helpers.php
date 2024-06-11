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

        return ucfirst($inisial); // Mengembalikan inisial
        }
    }

if ( ! function_exists('generateNomorAju') ) {
    function generateNomorAju( $length = 26 )
        {
        $result = '';
        for ( $i = 0; $i < $length; $i++ ) {
            $result .= mt_rand(0, 9);
            }
        return $result;
        }
    }

if ( ! function_exists('printNomorAju') ) {
    function printNomorAju( $number )
        {
        if ( strlen($number) != 26 ) {
            return;
            }
        // Extract parts based on the required format
        $part1           = substr($number, 0, 6);
        $part2           = substr($number, 6, 6);
        $part3           = substr($number, 12, 8);
        $part4           = substr($number, 20, 6);
        $formattedNumber = "{$part1}-{$part2}-{$part3}-{$part4}";

        return $formattedNumber;
        }
    }

if ( ! function_exists('checkNomorAjuRoute') ) {
    function checkNomorAjuRoute( $number )
        {
        if ( strlen($number) == 26 && is_numeric($number) ) {
            return true;
            }

        return false;
        }
    }

if ( ! function_exists('cleanString') ) {
    function cleanString( $string )
        {
        return preg_replace('/[^a-zA-Z]+/', '', $string);
        }


    }
if ( ! function_exists('generateIndonesiaDate') ) {
    function generateIndonesiaDate( $date )
        {
        $tanggal   = new DateTime($date);
        $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

        $formatter->setPattern('EEEE, d MMMM yyyy');

        $tanggalFormatted = $formatter->format($tanggal);
        return $tanggalFormatted;
        }
    }

if ( ! function_exists('generateRupiahFormat') ) {
    function generateRupiahFormat( $angka )
        {

        $formatter = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);

        $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, 2);

        $angkaFormatted = $formatter->formatCurrency($angka, 'IDR');

        echo $angkaFormatted;


        }
    }

require_once __DIR__ . '/Helpers/generate_jenis_impor_options.php';
require_once __DIR__ . '/Helpers/generate_cara_bayar_options.php';
require_once __DIR__ . '/Helpers/generate_jenis_identitas_options.php';
require_once __DIR__ . '/Helpers/generate_cara_angkut_options.php';
require_once __DIR__ . '/Helpers/generate_tipe_kontainer_options.php';
require_once __DIR__ . '/Helpers/generate_kode_jenis_transaksi_options.php';
require_once __DIR__ . '/Helpers/generate_kode_jenis_incoterm_options.php';
require_once __DIR__ . '/Helpers/generate_jenis_nilai_options.php';
require_once __DIR__ . '/Helpers/generate_kondisi_barang_options.php';
