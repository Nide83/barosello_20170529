<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 18:55
 */

namespace Tests\Number\Type;

use BS\Number\Type\BaroSelloNumber;
use PHPUnit\Framework\TestCase;

class BaroSelloNumberTest extends TestCase
{
    public function testValOut()
    {
        $baro = new BaroSelloNumber(1);

        $this->assertEquals('BaroSello', $baro->getValOut());
    }
}
