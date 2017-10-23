<?php
/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 06.10.2017
 * Time: 13:55
 */

namespace GombocNameSpace;

interface Flaggen_Interface
{
    /**
     * @return float soll die Fläche berechnen
     */
    public function getArea() : float;
}