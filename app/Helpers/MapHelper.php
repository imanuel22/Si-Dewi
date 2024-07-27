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
        $latitudeDecimal = self::dmsToDecimal($parts[0], true);
        $longitudeDecimal = self::dmsToDecimal($parts[1], false);

        return [
            'latitude' => $latitudeDecimal,
            'longitude' => $longitudeDecimal
        ];
    }

    /**
     * Mengonversi koordinat dari format derajat, menit, dan detik (DMS) ke format desimal.
     *
     * @param string $dms Koordinat dalam format DMS, misalnya "8°28'10.6"S"
     * @param bool $isLatitude Menentukan apakah ini adalah latitude atau longitude
     * @return float Koordinat dalam format desimal.
     */
    private static function dmsToDecimal($dms, $isLatitude)
    {
        // Menentukan arah koordinat sebelum menghapus simbol
        $direction = strtoupper(substr($dms, -1));

        // Menghapus simbol derajat, menit, dan detik
        $dms = preg_replace('/[^\d\.]/', ' ', $dms);
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

        // Mengubah tanda berdasarkan arah koordinat
        if (($isLatitude && $direction == 'S') || (!$isLatitude && $direction == 'W')) {
            $decimal = -$decimal;
        }

        return $decimal;
    }

    public static function isDmsFormat($coordinateString) {
        return preg_match('/\d+°\d+\'\d+(\.\d+)?\"[NS] \d+°\d+\'\d+(\.\d+)?\"[EW]/', $coordinateString);
    }
}
