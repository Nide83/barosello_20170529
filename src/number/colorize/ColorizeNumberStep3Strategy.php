<?php
/**
 * Created by PhpStorm.
 * User: Nicola
 * Date: 28/05/2017
 * Time: 12:25
 */

namespace BS\Number\Colorize;

use BS\Number\INumber;
use BS\Number\Type\BaroNumber;
use BS\Number\Type\BaroSelloNumber;
use BS\Number\Type\NardoNumber;
use BS\Number\Type\SelloNumber;
use BS\Output\IOutputColor;


/**
 * Class ColorizeNumberStep3Strategy
 * @package BS\Number\Colorize
 */
class ColorizeNumberStep3Strategy implements IColorizeNumberStrategy
{
    /**
     * @var IOutputColor
     */
    protected $outColor;

    public function __construct(IOutputColor $outputColor)
    {
        $this->outColor = $outputColor;
    }

    public function colorize(INumber $number) : INumber
    {
        $valOut = $number->getValOut();

        $valOurColorized = $valOut;

        if($number instanceof BaroNumber){
           $valOurColorized = $this->outColor->green($valOut);
        }

        if($number instanceof SelloNumber){
            $valOurColorized = $this->outColor->red($valOut);
        }

        if($number instanceof NardoNumber){
            $valOurColorized = $this->outColor->yellow($valOut);
        }

        if($number instanceof BaroSelloNumber){
            $valOurColorized = $this->outColor->blue($valOut);
        }

        $number->setValOut($valOurColorized);

        return $number;
    }
}