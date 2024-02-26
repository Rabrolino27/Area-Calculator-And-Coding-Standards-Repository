<?php

namespace App\Http\Controllers;

use App\Services\Triangle;
use Illuminate\Http\Request;
use App\Contracts\TriangleInterface;
use App\Contracts\Geomentry\Calculator;

class TriangleController extends Controller
{
    public function index(string $a, string $b, string $c,)
    {   
       
        if($a < 0 || $b < 0 || $c < 0 )
        return response()->json(['status' => 400, 'message' => 'Sides cannot be Negative']);
        
        $s = array_sum([$a, $b, $c]) / 2;

        $triangle = new Triangle($a, $b, $c, $s);
        $surface = $triangle->surface();
        $diameter = $triangle->diameter();
        $circumference = $triangle->circumference();
        return response()->json
        ([
            'type' => 'Triangle',
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'surface' => $surface,
            'circumference' => $circumference,
            'diameter' => $diameter
        ]);

    }
}
