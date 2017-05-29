<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 27/05/2017
 * Time: 08:37
 */

namespace BS\Number;

/**
 * Interface INumber
 * @package BS\Number
 */
interface INumber
{
    /**
     * Numero ricevuto in input
     *
     * @return int
     */
    public function getValIn();

    /**
     * Numero o testo da visualizzare in  output
     *
     * @return mixed
     */
    public function getValOut();
}