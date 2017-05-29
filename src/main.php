<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 27/05/2017
 * Time: 08:33
 */

namespace BS;

use BS\Step\Invoker;
use BS\Step\Receiver;

require 'vendor/autoload.php';



echo "Barosello Test";

do{
    echo "\n\nInserisci un numero compreso tra 1 e 5 per eseguire il relativo test (exit per terminare): ";


    $handle = fopen ("php://stdin","r");
    $cmd = trim(fgets($handle));

    if($cmd === 'exit'){
        exit;
    }

    $class = __NAMESPACE__."\Step\Step{$cmd}Command";

    if(class_exists($class)){
        $stepCommad = new $class(new Receiver());
        $invoker = new Invoker($stepCommad);
        $invoker->run();

    } else  {
        die("Puoi inserire solo un numero compreso tra 1 e 5 o 'exit' per terminare!\n");
    }


}while($cmd != 'exit');



