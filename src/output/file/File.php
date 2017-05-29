<?php
/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 29/05/2017
 * Time: 11:28
 */

namespace BS\Output\File;

/**
 * Class File
 * @package BS\Output\File
 */
class File
{
    /**
     * @var string
     */
    protected $filePath;

    /**
     * File constructor.
     * @param $filePath
     */
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * Salva il testo nel file
     *
     * @param $text
     */
    public function write($text)
    {
        file_put_contents($this->filePath, $text);
    }
}