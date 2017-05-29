<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 08:37
 */

namespace BS\Step;

/**
 * Class Step2Command
 *
 * @package BS\Step
 */
class Step2Command extends Command
{
    public function execute()
    {
        $this->receiver->step2();
    }
}