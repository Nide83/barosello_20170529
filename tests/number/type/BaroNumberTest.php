<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 18:51
 */

namespace Tests\Number\Type;

use BS\Number\Type\BaroNumber;
use PHPUnit\Framework\TestCase;

class BaroNumberTest extends TestCase
{

    public function testValOut()
    {
        $baro = new BaroNumber(1);

        $this->assertEquals('Baro', $baro->getValOut());
    }
}
