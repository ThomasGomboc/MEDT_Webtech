<?php
/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 06.10.2017
 * Time: 14:03
 */
require_once "src/Flagge_Base.php";

$thomasFlagge = new Rechteck('Meine Flagge', 'rot', 2, 4);

echo $thomasFlagge->getName();
echo " <br /> ";
echo $thomasFlagge->getFarbe();
echo " <br /> ";
echo $thomasFlagge->getArea();
echo " <br /> ";
echo $thomasFlagge;
