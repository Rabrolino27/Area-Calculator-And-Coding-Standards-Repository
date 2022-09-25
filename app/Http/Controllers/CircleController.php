<?php

namespace App\Http\Controllers;

use App\Services\Circle;
use Illuminate\Http\Request;

class CircleController extends Controller
{   
  
    public function index(string $radius)
    {
        $circle = new Circle($radius);
        $surface = $circle->surface();
        $diameter = $circle->diameter();
        $circumference = $circle->surface();
        return response()->json
        ([
            "radius" => $radius,
            "surface" => $surface,
            "diameter" => $diameter,
            "circumference" => $circumference

        ]);

    }
}
