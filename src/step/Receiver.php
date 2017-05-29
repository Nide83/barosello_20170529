<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 08:33
 */

namespace BS\Step;

use BS\Number\Colorize\ColorizeNumberStep3Strategy;
use BS\Number\NumberList;
use BS\Number\Resolve\ResolveNumberStep1Strategy;
use BS\Number\Resolve\ResolveNumberStep2Strategy;
use BS\Number\Type\BaroNumber;
use BS\Number\Type\BaroSelloNumber;
use BS\Number\Type\SelloNumber;
use BS\Output\Console\Color\ConsoleColor;

/**
 * Class Receiver
 * @package BS\Step
 */
class Receiver
{

    /**
     * Codice per eseguire lo step 1
     */
    public function step1()
    {
        $list = NumberList::create(100, new ResolveNumberStep1Strategy());

        echo NumberList::stringify($list);
    }

    /**
     * Codice per eseguire lo step 2
     */
    public function step2()
    {
        $list = NumberList::create(100, new ResolveNumberStep2Strategy());

        echo NumberList::stringify($list);
    }

    /**
     * Codice per eseguire lo step 3
     */
    public function step3()
    {
        $colorizeStrategy = new ColorizeNumberStep3Strategy(new ConsoleColor());
        $list = NumberList::create(100, new ResolveNumberStep2Strategy(), $colorizeStrategy);

        echo NumberList::stringify($list);
    }

    /**
     * Codice per eseguire lo step 4
     */
    public function step4()
    {
        $list = NumberList::create(100, new ResolveNumberStep2Strategy());
        $listFiltered = $list->filterByValOut(BaroSelloNumber::VAL_OUT);

        echo NumberList::stringify($listFiltered);
    }

    /**
     * Codice per eseguire lo step 5
     */
    public function step5()
    {
        $list = NumberList::create(100, new ResolveNumberStep2Strategy());
        $listForConsole = $list->filterByValOut(BaroSelloNumber::VAL_OUT, SelloNumber::VAL_OUT);
        $listForFile = $list->filterByValOut(BaroNumber::VAL_OUT, SelloNumber::VAL_OUT);

        echo "\nStampo a console solo i BaroSello e i Sello\n";
        echo NumberList::stringify($listForConsole);

        echo "\n\nI Baro e i Sello sono salvati nel file baro_e_sello.txt\n";
        file_put_contents("baro_e_sello.txt", NumberList::stringify($listForFile));
    }
}