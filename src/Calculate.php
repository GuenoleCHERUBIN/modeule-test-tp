<?php

namespace App;

class Calculate
{
    public function add ($a, $b)
    {
        return $a + $b;
    }

    public function minus ($a, $b)
    {
        return $a - $b;
    }

    public function multiply ($a, $b)
    {
        return $a * $b;
    }

    public function divide ($a, $b)
    {
        if ($b === 0) {
            die();
        }
        return $a / $b;
    }
}