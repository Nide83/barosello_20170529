<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 27/05/2017
 * Time: 15:35
 */

namespace BS\Number\Resolve;

/**
 * Interface IResolveNumberStrategy
 * @package Number\Valout
 */
interface IResolveNumberStrategy
{
    /**
     * Restituisce il valore del numero da visalizzare in output
     *
     * @param int $valIn
     *
     * @return mixed
     */
    public function resolve(int $valIn);
}