<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 19:52
 */

namespace Tests\Number\Resolve;

use BS\Number\Resolve\ResolveNumberStep2Strategy;
use BS\Number\Type\BaroNumber;
use BS\Number\Type\BaroSelloNumber;
use BS\Number\Type\NardoNumber;
use BS\Number\Type\SelloNumber;
use PHPUnit\Framework\TestCase;

class ResolveNumberStep2StrategyTest extends TestCase
{

    public function numberProviders()
    {
        return[
            [0, 0],
            [1, 1],
            [2, 2],
            [3, BaroNumber::VAL_OUT],
            [4, 4],
            [5, SelloNumber::VAL_OUT],
            [6, BaroNumber::VAL_OUT],
            [7, NardoNumber::VAL_OUT],
            [8, 8],
            [9, BaroNumber::VAL_OUT],
            [10, SelloNumber::VAL_OUT],
            [11, 11],
            [12, BaroNumber::VAL_OUT],
            [13, 13],
            [14, NardoNumber::VAL_OUT],
            [15, BaroSelloNumber::VAL_OUT],
            [16, 16],
            [17, 17],
            [18, BaroNumber::VAL_OUT],
            [19, 19],
            [20, SelloNumber::VAL_OUT],
            [21, NardoNumber::VAL_OUT],
            [22, 22],
            [23, 23],
            [24, BaroNumber::VAL_OUT],
            [25, SelloNumber::VAL_OUT],
            [26, 26],
            [27, BaroNumber::VAL_OUT],
            [28, NardoNumber::VAL_OUT],
            [29, 29],
            [30, BaroSelloNumber::VAL_OUT],
            [31, 31],
            [32, 32],
            [33, BaroNumber::VAL_OUT],
            [34, 34],
            [35, NardoNumber::VAL_OUT],
            [36, BaroNumber::VAL_OUT],
            [37, 37],
            [38, 38],
            [39, BaroNumber::VAL_OUT],
            [40, SelloNumber::VAL_OUT],
            [41, 41],
            [42, NardoNumber::VAL_OUT],
            [43, 43],
            [44, 44],
            [45, BaroSelloNumber::VAL_OUT],
            [46, 46],
            [47, 47],
            [48, BaroNumber::VAL_OUT],
            [49, NardoNumber::VAL_OUT],
            [50, SelloNumber::VAL_OUT],
            [51, BaroNumber::VAL_OUT],
            [52, 52],
            [53, 53],
            [54, BaroNumber::VAL_OUT],
            [55, SelloNumber::VAL_OUT],
            [56, NardoNumber::VAL_OUT],
            [57, BaroNumber::VAL_OUT],
            [58, 58],
            [59, 59],
            [60, BaroSelloNumber::VAL_OUT],
            [61, 61],
            [62, 62],
            [63, NardoNumber::VAL_OUT],
            [64, 64],
            [65, SelloNumber::VAL_OUT],
            [66, BaroNumber::VAL_OUT],
            [67, 67],
            [68, 68],
            [69, BaroNumber::VAL_OUT],
            [70, NardoNumber::VAL_OUT],
            [71, 71],
            [72, BaroNumber::VAL_OUT],
            [73,73],
            [74, 74],
            [75, BaroSelloNumber::VAL_OUT],
            [76, 76],
            [77, NardoNumber::VAL_OUT],
            [78, BaroNumber::VAL_OUT],
            [79, 79],
            [80, SelloNumber::VAL_OUT],
            [81, BaroNumber::VAL_OUT],
            [82, 82],
            [83, 83],
            [84, NardoNumber::VAL_OUT],
            [85, SelloNumber::VAL_OUT],
            [86, 86],
            [87, BaroNumber::VAL_OUT],
            [88, 88],
            [89, 89],
            [90, BaroSelloNumber::VAL_OUT],
            [91, NardoNumber::VAL_OUT],
            [92, 92],
            [93, BaroNumber::VAL_OUT],
            [94, 94],
            [95, SelloNumber::VAL_OUT],
            [96, BaroNumber::VAL_OUT],
            [97, 97],
            [98, NardoNumber::VAL_OUT],
            [99, BaroNumber::VAL_OUT],
            [100, SelloNumber::VAL_OUT]

        ];

    }

    /**
     * @param $valIn
     * @param $valOut
     *
     * @dataProvider numberProviders
     */
    public function testResolveNumber(int $valIn, $valOut)
    {
        $strategy = new ResolveNumberStep2Strategy();
        $number = $strategy->resolve($valIn);

        $this->assertEquals($valOut, $number->getValOut());
    }

}
