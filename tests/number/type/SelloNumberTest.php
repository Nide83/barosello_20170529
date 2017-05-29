<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 18:57
 */

namespace Tests\Number\Type;

use BS\Number\Type\SelloNumber;
use PHPUnit\Framework\TestCase;

class SelloNumberTest extends TestCase
{
    public function testValOut()
    {
        $sello = new SelloNumber(1);

        $this->assertEquals('Sello', $sello->getValOut());
    }
}
