<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 20:57
 */

namespace BS\Output;


interface IOutputColor
{
    /**
     * Crea la stringa per cambiare il colore al testo
     *
     * @param string $colorName
     * @param $text
     *
     * @return string
     */
    public function apply(string $colorName, $text) : string;

    /**
     * Testo di colore rosso
     *
     * @param $text
     *
     * @return string
     */
    public function red($text): string;

    /**
     * Testo di colore blue
     *
     * @param $text
     *
     * @return string
     */
    public function blue($text): string;

    /**
     * Testo di colore giallo
     *
     * @param $text
     *
     * @return string
     */
    public function yellow($text): string;

    /**
     * Testo di colore verde
     *
     * @param $text
     *
     * @return string
     */
    public function green($text): string;

    /**
     * Colore di default del testo
     *
     * @param $text
     *
     * @return string
     */
    public function normal($text): string;

}