<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 20:02
 */

namespace Tests\Number\Colorize;

use BS\Number\Colorize\ColorizeNumberStep3Strategy;
use BS\Number\Number;
use BS\Number\Type\BaroNumber;
use BS\Number\Type\BaroSelloNumber;
use BS\Number\Type\NardoNumber;
use BS\Number\Type\SelloNumber;
use BS\Output\Console\Color\ConsoleColor;
use PHPUnit\Framework\TestCase;

class ColorizeNumberStep3StrategyTest extends TestCase
{
    
    public function testColorizeStrategy()
    {
        $strategy = new ColorizeNumberStep3Strategy(new ConsoleColor());

        $baro = $strategy->colorize(new BaroNumber(3));
        $this->assertEquals("\033[0;32m Baro \033[0m", $baro->getValOut());

        $sello = $strategy->colorize(new SelloNumber(5));
        $this->assertEquals("\033[0;31m Sello \033[0m", $sello->getValOut());

        $nardo = $strategy->colorize(new NardoNumber(7));
        $this->assertEquals("\033[1;33m Nardo \033[0m", $nardo->getValOut());

        $baroSello = $strategy->colorize(new BaroSelloNumber(15));
        $this->assertEquals("\033[0;34m BaroSello \033[0m", $baroSello->getValOut());
    }
}
