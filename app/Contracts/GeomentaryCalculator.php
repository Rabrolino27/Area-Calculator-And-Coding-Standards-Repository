<?php 

namespace App\Contracts;

interface GeomentaryCalculator
{
    public function sumOfArea(array $arr):string;

    public function sumOfDiameter(array $arr):string;
}

?>