<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 08:37
 */

namespace BS\Step;

/**
 * Class Step3Command
 *
 * @package BS\Step
 */
class Step3Command extends Command
{
    public function execute()
    {
        $this->receiver->step3();
    }
}