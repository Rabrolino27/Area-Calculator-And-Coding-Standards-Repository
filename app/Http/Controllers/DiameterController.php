<?php

namespace App\Http\Controllers;

use App\Services\Sum;
use App\Services\Circle;
use App\Services\Triangle;
use App\Services\ValueChecker;
use Illuminate\Http\Request;

class DiameterController extends Controller
{
    public function index($a,$b,$c,$radius, Sum $sum){
        $check = (new ValueChecker())->check([$a, $b, $c, $radius]));
        
        if($check == true)
            return response()->json(['status' => 400, 'message' => 'Sides cannot be Negative']);
        
        $s = array_sum([$a, $b, $c]) / 2;
        
        //object 1
        $triangle = new Triangle($a, $b, $c, $s);
        $triangleDiameter = $triangle->diameter();

        //object 2
        $circle = new Circle($radius);
        $circleDiameter = $circle->diameter();

        $arrayOfBothShapes = array($triangleDiameter, $circleDiameter);
        $response = $sum->sumOfDiameter($arrayOfBothShapes);
        return response()->json([
            'shapes' => 'Triangle and Circle',
            'Sum of Diameter' => $response
        ]);
    }
}
