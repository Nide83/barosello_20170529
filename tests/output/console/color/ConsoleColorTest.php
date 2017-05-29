<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 21:53
 */

namespace BS\Output\Console\Color;

use BS\Output\Console\Color\ConsoleColor;
use PHPUnit\Framework\TestCase;

class ConsoleColorTest extends TestCase
{

    public function testColors()
    {
        $consoleColor = new ConsoleColor();

        $this->assertEquals("\033[0;32m Testo \033[0m", $consoleColor->green("Testo"));
        $this->assertEquals("\033[0;31m Testo \033[0m",$consoleColor->red("Testo"));
        $this->assertEquals("\033[1;33m Testo \033[0m", $consoleColor->yellow("Testo"));
        $this->assertEquals("\033[0;34m Testo \033[0m", $consoleColor->blue("Testo"));
        $this->assertEquals("\033[0;30m Testo \033[0m", $consoleColor->normal("Testo"));
    }
}
