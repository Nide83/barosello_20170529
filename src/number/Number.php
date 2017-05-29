<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 27/05/2017
 * Time: 08:41
 */

namespace BS\Number;

/**
 * Class Number
 * @package BS\Number
 */
class Number implements INumber
{
    /**
     * @var int
     */
    protected $valIn;

    /**
     * @var mixed
     */
    protected $valOut;


    /**
     * Se il numero passato è un multiplo di uno dei multipli
     *
     * @param mixed $number
     * @param \int[] ...$multiple
     *
     * @return bool
     */
    public static function isMultipleOf($number, int...$multiple): bool
    {
        if($number instanceof INumber){
            $valIn = $number->getValIn();
        } else if(is_int($number)){
            $valIn = $number;
        } else {
            throw new \InvalidArgumentException("Accetta solo INumber o integer");
        }

        if($valIn === 0){
            return false;
        }

        $isMultiple = true;

        foreach($multiple as $m){
            $isMultiple = $isMultiple && ($valIn % $m === 0);
        }

        return $isMultiple;
    }

    /**
     * Number constructor.
     * @param int $valIn
     * @param mixed $valOut
     */
    public function __construct(int $valIn, $valOut = '')
    {
        $this->valIn = $valIn;
        $this->valOut = $valOut;
    }

    /**
     * @return int
     */
    public function getValIn() : int
    {
        return $this->valIn;
    }

    /**
     * @param $valOut
     */
    public function setValOut($valOut)
    {
        $this->valOut = $valOut;
    }

    /**
     * @return mixed
     */
    public function getValOut()
    {
        return $this->valOut;
    }
}