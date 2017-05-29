<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 18:56
 */

namespace Tests\Number\Type;

use BS\Number\Type\NardoNumber;
use PHPUnit\Framework\TestCase;

class NardoNumberTest extends TestCase
{
    public function testValOut()
    {
        $nardo = new NardoNumber(1);

        $this->assertEquals('Nardo', $nardo->getValOut());
    }
}
