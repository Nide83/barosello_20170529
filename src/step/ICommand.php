<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 27/05/2017
 * Time: 17:50
 */

namespace BS\Step;

/**
 * Interface ICommand
 * @package BS\Step
 */
interface ICommand
{
    /**
     * @return mixed
     */
    public function execute();
}