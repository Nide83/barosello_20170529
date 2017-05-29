<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 27/05/2017
 * Time: 17:32
 */

namespace BS\Number;

use BS\Number\Colorize\IColorizeNumberStrategy;
use BS\Number\Resolve\IResolveNumberStrategy;
use BS\Number\Type\BaroSelloNumber;
use PHPUnit\Runner\Exception;

/**
 * Class NumberList
 * @package BS\Number
 */
class NumberList extends \ArrayIterator
{

    /**
     * Crea una lista di numeri
     *
     * @param int $numMax                                       fino a quale numero creare la lista
     * @param IResolveNumberStrategy $resolveNumberStrategy     algoritmo da usare per individuare l'output del numero
     * @param IColorizeNumberStrategy $colorizeStrategy         algoritmo da usare per colorare l'output del numero
     *
     * @return NumberList
     */
    public static function create(int $numMax, IResolveNumberStrategy $resolveNumberStrategy, IColorizeNumberStrategy $colorizeStrategy = null): self
    {
        $list = new self();
        for($i = 0; $i <= $numMax; $i++){
            $number = $resolveNumberStrategy->resolve($i);

            if($colorizeStrategy){
                $number = $colorizeStrategy->colorize($number);
            }

            $list->append($number);
        }

        return $list;
    }

    /**
     * Concateno i valori di put della lista
     *
     * @param NumberList $list
     * @param string $delimiter
     *
     * @return String
     */
    public static function stringify(NumberList $list, string $delimiter = ',') : String
    {
        $vol = [];
        foreach ($list as $n)
        {
            $vol[] = $n->getValOut();
        }

        return implode(',', $vol);
    }

    /**
     * NumberList constructor.
     *
     * @param array $array
     * @param int $flags
     */
    public function __construct(array $array = array(), $flags = 0)
    {
        parent::__construct($array, $flags);
    }

    /**
     * Filtra i numeri in base al loro valore di output
     *
     * @param array ...$valOut
     *
     * @return NumberList
     */
    public function filterByValOut(...$valOut) : self
    {
        $list = new self();

        $copy = new self($this->getArrayCopy());
        while($copy->valid()) {
            $number = $copy->current();

            if(in_array($number->getValOut(), $valOut, true)){
                $list->append($number);
            }

            $copy->next();
        }

        return $list;
    }


}