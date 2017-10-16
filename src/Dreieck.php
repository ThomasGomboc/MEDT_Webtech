<?php namespace Gomboc;

/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 02.10.2017
 * Time: 17:34
 */
/*
  * require_once wird nicht mehr benötigt wegen namepsaces und autoload
require_once "Flagge_Base.php";
require_once "Rechteck.php";
require_once "Quadrat.php";
*/



class Dreieck extends Flagge_Base
{
    private $length;
    private $hight;

    public function __construct($name, $farbe, $length, $hight)
    {
        parent::__construct($name, $farbe);
        $this->length = $length;
        $this->hight = $hight;
    }

    public function getArea() : float
    {
        $area = ($this->hight * $this->length) / 2;
        return $area;
    }
}