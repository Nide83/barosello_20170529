<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 12:21
 */

namespace BS\Number\Colorize;

use BS\Number\INumber;

/**
 * Interface IColorizeNumberStrategy
 * @package BS\Number\Colorize
 */
interface IColorizeNumberStrategy
{
    /**
     * Per cambiare il colore di un numero
     *
     * @param INumber $number
     *
     * @return INumber
     */
    public function colorize(INumber $number):INumber;
}