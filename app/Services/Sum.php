<?php
namespace App\Services;

use App\Contracts\GeomentaryCalculator;

class Sum implements GeomentaryCalculator
{
    public function sumOfArea(array $arr):integer
    {
        $noOfAreas = count($arr);
        $sumOfAreas = 0;
        for($i = 0; $i < $noOfAreas; $i++){
            $sumOfAreas += $arr[$i];
        }
        return (integer) $sumOfAreas;
    }

    public function sumOfDiameter(array $arr):integer
    {
        $noOfDiameters = count($arr);
        $sumOfDiameters = 0;
        for($i = 0; $i < $noOfDiameters; $i++){
            $sumOfDiameters += $arr[$i];
        }
        return (integer) $sumOfDiameters;

    }
    
}


?>
