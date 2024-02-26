<?php 

namespace App\Contracts;

interface ShapeCalculator
{
    public function surface():integer;

    public function diameter():integer;

    public function circumference():integer;

    //Note: Parameters are not declared in interface to allow expansion & scalability in the future as the solution for both shapes requires different kind of parameters 
}

?>
