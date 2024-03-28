<?php 

namespace App\Contracts;

interface GeomentaryCalculator
{
    public function sumOfArea(array $arr):integer;

    public function sumOfDiameter(array $arr):integer;
}

?>
