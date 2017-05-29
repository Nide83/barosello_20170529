<?php
/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 29/05/2017
 * Time: 11:41
 */

namespace BS\Output\File;


use BS\Output\IOutput;

/**
 * Class FileAdapter
 * @package BS\Output\File
 */
class FileAdapter implements IOutput
{
    /**
     * @var File
     */
    private $file;

    /**
     * FileAdapter constructor.
     * @param File $file
     */
    public function __construct(File $file)
    {
        $this->file = $file;
    }

    /**
     * @param string $text
     */
    public function log(string $text)
    {
        $this->file->write($text);
    }
}