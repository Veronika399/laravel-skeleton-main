<?php

namespace App\Helpers;

use GeoIp2\Database\Reader;

class GeoIPController
{
    /**
     * Get a country code from an ip address
     * @param string $ip
     * @param string $default [optional]
     * @return string
     */
    public static function getCountryCode(string $ip, string $default = 'HR'): string
    {
        $geoIpStorage = storage_path('app/geoip');
        $db = "$geoIpStorage/GeoLite2-Country.mmdb";

        // Check for update for downloaded geoip db
        if (!file_exists($db) || filemtime($db) > strtotime('1 week')) {
            // Link to download mmdb
            $GeoIPmmdb = "https://download.maxmind.com/app/geoip_download?edition_id=GeoLite2-Country&license_key=GsoKZLuSZohnsEzR&suffix=tar.gz";

            // Create the directory if it doesn't exist
            if (!file_exists($geoIpStorage)) mkdir($geoIpStorage, 0755, true);

            // Download latest db
            $tar = "$geoIpStorage/geoip.tar.gz";
            file_put_contents($tar, file_get_contents($GeoIPmmdb));

            // Get Phar Data
            $phar = new \PharData($tar);

            // Get first folder name
            $folder = null;
            foreach ($phar as $file) if ($file->isDir()) {
                $folder = $file->getFilename();
                break;
            }
            if (!$folder) return $default;

            // Extract mmdb file
            $phar->extractTo($geoIpStorage, "$folder/GeoLite2-Country.mmdb", true);
            rename("$geoIpStorage/$folder/GeoLite2-Country.mmdb", $db);

            // Remove unneeded files and folders
            rmdir("$geoIpStorage/$folder");
            unlink($tar);
        }

        try {
            $reader = new Reader($db);
            $record = $reader->country($ip);
            $country = $record->country->isoCode ?? $default;
        } catch (\Exception $e) {
            $country = $default;
        }

        return $country;
    }
}
