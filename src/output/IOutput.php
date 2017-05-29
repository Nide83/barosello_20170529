<?php
/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 29/05/2017
 * Time: 11:35
 */

namespace BS\Output;

/**
 * Interface IOutput
 * @package BS\Output
 */
interface IOutput
{
    /**
     * Visualizza a console o salva il testo di un file a seconda dell'oggetto che istanzia questa classe
     * @param string $text
     */
    public function log(string $text);
}