<?php

namespace App;

use Exception;

class Calculate
{
    public static function add ($a, $b)
    {
        return $a + $b;
    }

    public static function minus ($a, $b)
    {
        return $a - $b;
    }

    public static function multiply ($a, $b)
    {
        return $a * $b;
    }

    public static function divide ($a, $b)
    {
        if ($b === 0) {
            throw new Exception('Impossible de diviser par zero');
        }
        return $a / $b;
    }
}