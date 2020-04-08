<?php
namespace Test;

use App\Calculate;

class CalculateTest extends \PHPUnit\Framework\TestCase
{

    public function testAdd()
    {
        $a = 6;
        $b = 12;

        $calculate = new Calculate();
        $calculate->add($a, $b);

        $this->assertEquals($a + $b, $calculate);
    }
}