<?php

/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 25.09.2017
 * Time: 12:06
 */

/*
require_once "Dreieck.php";
require_once "Quadrat.php";
require_once "Rechteck.php";
*/


namespace GombocNameSpace;

abstract class Flagge_Base
{
    private $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    #private $form;
    private $farbe;

    /**
     * @return string
     */
    public function getFarbe(): string
    {
        return $this->farbe;
    }

    #private $flaeche;

    /**
     * @return string Gibt
     */
    public function __toString() : string
    {
        //return 'Die Flagge ' . $this->name . ' mit der From ' . $this->form . ', enthält die Fläche ' . $this->flaeche . ' und dem Flächeninhalt ' . $this->flaeche;
        return 'Die Flagge hat den Namen ' . $this->name . 'und die farbe ' . $this->farbe;
    }

    /**
     * Flagge constructor.
     * @param $bezeichnung  string Beschreibt wem diese Flagge gehört
     * @param $form         string Beschreibt die Form der Flagge
     * @param $farbe        string Beschreibt die Farbe
     * @param $flaeche      string Gibt die Parameter zur flächenberechnung an
     */
    function __construct(string $name, string $farbe)
    {
        $this->name = $name;
        $this->farbe = $farbe;
    }

}

