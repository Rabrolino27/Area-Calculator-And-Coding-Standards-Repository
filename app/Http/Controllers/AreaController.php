<?php

namespace App\Http\Controllers;

use App\Services\Sum;
use App\Services\Circle;
use App\Services\Triangle;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index($a,$b,$c,$radius, Sum $sum){
        if($a < 0 || $b < 0 || $c < 0 || $radius < 0 )
            return response()->json(['status' => 400, 'message' => 'Sides cannot be Negative']);
        
        $s = array_sum([$a, $b, $c]) / 2;

        //object 1
        $triangle = new Triangle($a, $b, $c, $s);
        $triangleSurface = $triangle->surface();
        
        //object 2
        $circle = new Circle($radius);
        $circleSurface = $circle->surface();

        $arrayOfBothShapes = array($triangleSurface, $circleSurface);
        $response = $sum->sumOfArea($arrayOfBothShapes);
        return response()->json([
            'shapes' => 'Triangle and Circle',
            'Sum of Area' => $response
        ]);
    }
}
