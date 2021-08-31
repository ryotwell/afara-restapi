<?php

namespace Ryodevz;

use Ryodevz\HttpfulWrapper\Http;

class AfaraMyId
{
    public static $base = 'https://public-restapi.herokuapp.com/api/';

    public static function json($link)
    {
        return Http::get(self::$base . $link)->send()->body;
    }

    public static function TextOrPlain($link)
    {
        return Http::get(self::$base . $link)->send()->body;
    }
}
