<?php

namespace App\Helpers;

class Uploadsfile
{
    public static $uploadsPath = array (
        'profile_photo'=>'/uploads/profile',
);
    public static function getUplaodsPath($paths)
    {
        return public_path().self::$uploadsPath[$paths];
    }
}
