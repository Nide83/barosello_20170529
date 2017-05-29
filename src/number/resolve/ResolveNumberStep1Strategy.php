<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 27/05/2017
 * Time: 15:39
 */

namespace BS\Number\Resolve;

use BS\Multiple\Multiple;
use BS\Number\INumber;
use BS\Number\Number;
use BS\Number\Type\BaroNumber;
use BS\Number\Type\BaroSelloNumber;
use BS\Number\Type\SelloNumber;

/**
 * Class ResolveNumberStep1Strategy
 * @package Number\Valout
 */
class ResolveNumberStep1Strategy implements IResolveNumberStrategy
{

    public function resolve(int $valIn) : INumber
    {

        if(Number::isMultipleOf($valIn, 3, 5)){
            return new BaroSelloNumber($valIn);
        }

        if(Number::isMultipleOf($valIn,3)){
            return new BaroNumber($valIn);
        }

        if(Number::isMultipleOf($valIn,5)){
            return new SelloNumber($valIn);
        }


        return new Number($valIn, $valIn);

    }
}