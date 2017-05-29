<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 21:04
 */

namespace BS\Output\Console\Color;

use BS\Output\IOutputColor;

/**
 * Class ConsoleColor
 * @package BS\Output\Console\Color
 */
class ConsoleColor implements IOutputColor
{
    /**
     * Array dei colori per CLI
     *
     * @var array
     */
    private $foregroundColor = [];

    /**
     * ConsoleColor constructor.
     */
    public function __construct()
    {
        $this->foregroundColor['black'] = '0;30';
        $this->foregroundColor['blue'] = '0;34';
        $this->foregroundColor['green'] = '0;32';
        $this->foregroundColor['red'] = '0;31';
        $this->foregroundColor['yellow'] = '1;33';
    }

    public function apply(string $color, $val): string
    {
        return "\033[{$this->foregroundColor[$color]}m $val \033[0m";
    }

    public function red($val): string
    {
        return $this->apply("red", $val);
    }

    public function blue($val): string
    {
        return $this->apply("blue", $val);
    }

    public function yellow($val): string
    {
        return $this->apply("yellow", $val);
    }

    public function green($val): string
    {
        return $this->apply("green", $val);
    }

    public function normal($val): string
    {
        return $this->apply("black", $val);
    }

}