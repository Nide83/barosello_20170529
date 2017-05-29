<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 27/05/2017
 * Time: 08:48
 */

namespace BS\Number\Type;

use BS\Number\Number;

/**
 * Class BaroNumber
 * @package BS\Number\Type
 */
class BaroNumber extends Number
{
    /**
     * @var string
     */
    const VAL_OUT = 'Baro';

    /**
     * BaroNumber constructor.
     * @param int $valIn
     */
    public function __construct($valIn)
    {
        parent::__construct($valIn, self::VAL_OUT);
    }
}