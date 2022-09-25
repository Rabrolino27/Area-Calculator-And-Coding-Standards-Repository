<?php
namespace App\Services;

use App\Services\Triangle;
use App\Contracts\TriangleInterface;
use App\Contracts\ShapeCalculator;


class Triangle implements ShapeCalculator
{
    public function __construct($a, $b, $c, $s){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->s = $s;
    }
    
    public function surface():string{
       $surface = sqrt($this->s*($this->s-$this->a)*($this->s-$this->b)*($this->s-$this->c));
       return $surface;
    
    }

    public function diameter():string{

        $stepA = sqrt($this->s*($this->s-$this->a)*($this->s-$this->b)*($this->s-$this->c));
        $stepB = $this->a*$this->b*$this->c;
        $stepC = 4 * $stepA;
        $radius = $stepB/$stepC;
        $diamater = 2 * $radius;
        return $diamater;
    }

    public function circumference():string{

        $circumference = $this->a+$this->b+$this->c;
        return $circumference;
    }

    

    

    
}


?>