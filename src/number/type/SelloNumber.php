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
 * Class SelloNumber
 * @package BS\Number\Type
 */
class SelloNumber extends Number
{
    /**
     * @var string
     */
    const VAL_OUT = 'Sello';

    /**
     * Sello constructor.
     * @param int $valIn
     */
    public function __construct($valIn)
    {
        parent::__construct($valIn, self::VAL_OUT);
    }
}