<?php namespace Gomboc;

/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 02.10.2017
 * Time: 17:44
 */
/*
require_once "Dreieck.php";
require_once "Flagge_Base.php";
require_once "Rechteck.php";
*/

class Quadrat extends Flagge_Base
{

    private $length;

    /**
     * Quadrat constructor.
     * @param string $name
     * @param string $farbe
     * @param $length
     */
    public function __construct($name, $farbe, $length)
    {
        parent::__construct($name, $farbe);
        $this->length = $length;
    }

    public function getArea() : float
    {
        $Area = pow($this->length,2);
        return $Area;
    }
}