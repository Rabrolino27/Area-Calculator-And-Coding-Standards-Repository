<?php
namespace App\Services;

use App\Contracts\ShapeCalculator;

class Circle implements ShapeCalculator
{
    public function __construct($radius)
    {
        $this->radius = $radius;
        $this->pie = 3.14;
    }
    public function surface():string{
        $area = pow($this->radius, 2);
        $surface = $area * $this->pie;
        return $surface;
    }

    public function diameter():string{
        $diamater = 2 * $this->radius;
        return $diamater;
    }

    public function circumference():string{
        $circumference = 2 * $this->pie * $this->radius;
        return $circumference;
    }
}


?>