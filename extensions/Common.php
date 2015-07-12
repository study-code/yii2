<?php

namespace app\extensions;

/**
 * User: mo
 * Date: 2015-7-12
 * Time: 23:55
 */
class Common
{
    public static function dump($data = [])
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }
}