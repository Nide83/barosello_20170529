<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 08:46
 */

namespace BS\Step;

/**
 * Class Invoker
 * @package BS\step
 */
class Invoker
{
    /**
     * @var ICommand
     */
    private $command;

    /**
     * Invoker constructor.
     * @param ICommand $command
     */
    public function __construct(ICommand $command)
    {
        $this->command = $command;
    }

    /**
     * Invoca il commando da eseguire
     */
    public function run()
    {
        $this->command->execute();
    }
}