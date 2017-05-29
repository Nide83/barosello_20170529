<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 21:46
 */

namespace BS\Number;

use BS\Number\NumberList;
use BS\Number\Type\BaroNumber;
use BS\Number\Type\BaroSelloNumber;
use BS\Number\Type\NardoNumber;
use BS\Number\Type\SelloNumber;
use PHPUnit\Framework\TestCase;


class NumberListTest extends TestCase
{

    public function testStringify()
    {
        $list = new NumberList();
        $list->append(new Number(0, 0));
        $list->append(new BaroNumber(3));
        $list->append(new SelloNumber(5));
        $list->append(new NardoNumber(7));
        $list->append(new BaroSelloNumber(15));

        $expected = "0,Baro,Sello,Nardo,BaroSello";
        $this->assertEquals($expected, NumberList::stringify($list));
    }
}
