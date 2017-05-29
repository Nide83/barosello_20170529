<?php
/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 29/05/2017
 * Time: 11:44
 */

namespace BS\Output\Console;

use BS\Output\IOutput;

/**
 * Class Console
 * @package BS\Output\Console
 */
class Console implements IOutput
{

    /**
     * @param $text
     */
    public function log(string $text)
    {
        echo $text;
    }
}