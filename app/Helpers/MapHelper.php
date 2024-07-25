<?php

namespace App\Helpers;

class MapHelper
{
     /**
     * Mengonversi koordinat DMS dalam format string gabungan menjadi format desimal.
     *
     * @param string $dmsString Koordinat dalam format gabungan DMS, misalnya "8°28'10.6\"S 115°14'18.7\"E"
     * @return array Koordinat dalam format desimal (latitude dan longitude).
     */
    public static function parseDmsCoordinates($dmsString)
    {
        // Menghapus tanda kutip ganda
        $dmsString = str_replace('"', '', $dmsString);

        // Memisahkan latitude dan longitude
        $parts = preg_split('/\s+/', $dmsString);
        if (count($parts) !== 2) {
            throw new \InvalidArgumentException('Format koordinat DMS tidak valid.');
        }

        // Mengonversi masing-masing bagian
        $latitudeDecimal = self::dmsToDecimal($parts[0]);
        $longitudeDecimal = self::dmsToDecimal($parts[1]);

        return [
            'latitude' => $latitudeDecimal,
            'longitude' => $longitudeDecimal
        ];
    }

    /**
     * Mengonversi koordinat dari format derajat, menit, detik (DMS) ke format desimal.
     *
     * @param string $dms Koordinat dalam format DMS, misalnya "8°28'10.6"S"
     * @return float Koordinat dalam format desimal.
     */
    private static function dmsToDecimal($dms)
    {
        // Menghapus simbol derajat, menit, dan detik
        $dms = preg_replace('/[^0-9\.\s]/', ' ', $dms);
        $parts = preg_split('/\s+/', trim($dms));

        // Memastikan format yang benar
        if (count($parts) < 3) {
            throw new \InvalidArgumentException('Format koordinat DMS tidak valid.');
        }

        // Mengonversi bagian-bagian DMS
        $degrees = (float)$parts[0];
        $minutes = (float)$parts[1];
        $seconds = (float)$parts[2];

        // Menghitung nilai desimal
        $decimal = $degrees + ($minutes / 60) + ($seconds / 3600);

        // Menentukan arah koordinat
        $direction = strtoupper(substr($dms, -1));

        // Mengubah tanda berdasarkan arah koordinat
        if ($direction == 'S' || $direction == 'W') {
            $decimal = -$decimal;
        }

        return $decimal;
    }
    public static function dmsToDecimal3($degrees, $minutes, $seconds, $direction)
 {
        $decimal = $degrees + ($minutes / 60) + ($seconds / 3600);
        if (strtoupper($direction) == 'S' || strtoupper($direction) == 'W') {
            $decimal *= -1;
        }
        return $decimal;
    }
}
