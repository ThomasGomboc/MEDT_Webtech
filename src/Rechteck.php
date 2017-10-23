<?php

/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 25.09.2017
 * Time: 12:06
 */


namespace gomboc\flags;

class Rechteck extends Flagge_Base
{
    private $length;
    private $width;

    /**
     * Rechteck constructor.
     * @param $name
     * @param $farbe
     * @param $length
     * @param $width
     */
    public function __construct($name, $farbe, $length, $width)
    {
        parent::__construct($name, $farbe);
        $this->length = $length;
        $this->width = $width;
    }

    public function  __toString() : string
    {
        return parent::__toString() . ' ';
    }

    /**
     * @return float
     */
    public function getArea() : float
    {
        $area = $this->length * $this->width;
        return $area;
    }
}