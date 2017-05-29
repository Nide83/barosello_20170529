<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 27/05/2017
 * Time: 10:00
 */

namespace Tests\Number;

use BS\Number\Number;
use PHPUnit\Framework\TestCase;
use Psr\Log\InvalidArgumentException;

class NumberTest extends TestCase
{

    public function multipleProvider()
    {
        return [
            [3, 3],
            [6, 3],
            [90, 3],
            [5, 5],
            [10, 5],
            [15, 5],
            [7, 7],
            [14, 7],
            [21, 7]
        ];
    }

    /**
     * @dataProvider multipleProvider
     */
    public function testIsMultipleOf(int $val, int $multiple)
    {
        $this->assertTrue(Number::isMultipleOf($val, $multiple));
    }

    public function testIsMultipleOfThreeAndFive()
    {
        $this->assertTrue(Number::isMultipleOf(15, 3,5));
        $this->assertTrue(Number::isMultipleOf(30, 3,5));
        $this->assertTrue(Number::isMultipleOf(45, 3,5));
        $this->assertTrue(Number::isMultipleOf(60, 3,5));
        $this->assertTrue(Number::isMultipleOf(75, 3,5));
        $this->assertTrue(Number::isMultipleOf(90, 3,5));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testIsMultipleOfException()
    {
        Number::isMultipleOf("testo", 2);
    }

    public function testValInNumber()
    {
        $number = new Number(1);
        $this->assertEquals($number->getValIn(), 1);
    }

    public function testValOutNumber()
    {
        $number = new Number(1, 10);
        $this->assertEquals($number->getValOut(), 10);
    }

}
