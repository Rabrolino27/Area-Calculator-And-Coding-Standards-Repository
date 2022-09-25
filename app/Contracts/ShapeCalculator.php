<?php 

namespace App\Contracts;

interface ShapeCalculator
{
    public function surface():string;

    public function diameter():string;

    public function circumference():string;

    //Note: Parameters are not declared in interface to allow expansion & scalability in the future as the solution for both shapes requires different kind of parameters 
}

?>