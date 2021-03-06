<?php

namespace Ryodevz;

class AfaraMyId
{
    public static $base = 'https://afara.my.id/api/';

    public static function json($link)
    {
        return HttpfulWrapper::get(self::$base . $link)->send()->body;
    }

    public static function TextOrPlain($link)
    {
        return HttpfulWrapper::get(self::$base . $link)->send()->body;
    }
}
