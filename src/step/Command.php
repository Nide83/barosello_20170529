<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 10:12
 */

namespace BS\Step;

/**
 * Class Command
 * @package BS\Step
 */
abstract class Command implements ICommand
{
    /**
     * @var Receiver
     */
    protected $receiver;

    /**
     * Command constructor.
     * @param Receiver $receiver
     */
    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }
}