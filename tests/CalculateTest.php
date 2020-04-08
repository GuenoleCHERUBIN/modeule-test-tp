<?php
namespace Test;

use App\Calculate;

class CalculateTest extends \PHPUnit\Framework\TestCase
{
    public $a = 6;
    public $b = 12;

    public function testAdd()
    {

        $calculate = Calculate::add($this->a, $this->b);

        $this->assertEquals( $this->a + $this->b, $calculate);
    }

    public function testMinus()
    {
        $calculate = Calculate::add($this->a, $this->b);

        $this->assertEquals( $this->a -  $this->b, $calculate);
    }

    public function testMultiply()
    {
        $calculate = Calculate::add($this->a, $this->b);

        $this->assertEquals( $this->a * $this->b, $calculate);
    }

    public function testDivision()
    {
        $calculate = Calculate::add($this->a, $this->b);

        $this->assertEquals( $this->a /  $this->b, $calculate);
    }
}