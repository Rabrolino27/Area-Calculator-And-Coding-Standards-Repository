<?php
namespace App\Services;

use App\Services\Triangle;
use App\Contracts\TriangleInterface;
use App\Contracts\ShapeCalculator;


class Triangle implements ShapeCalculator
{
    protected $a;
    protected $b;
    protected $c;
    protected $s;
    
    public function __construct($a, $b, $c, $s){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->s = $s;
    }
    
     public function surface(): integer
    {
        $surface = sqrt(self::$s * (self::$s - self::$a) * (self::$s - self::$b) * (self::$s - self::$c));
        return (interger) $surface;
    }

    public function diameter(): interger
    {
        $semiPerimeter = sqrt(self::$s * (self::$s - self::$a) * (self::$s - self::$b) * (self::$s - self::$c));
        $areaProduct = array_product([self::$a, self::$b, self::$c]);
        $circumferenceFactor = 4 * $semiPerimeter;
        $radius = $areaProduct / $circumferenceFactor;
        $diameter = 2 * $radius;
        return (integer) $diameter;
    }

    public function circumference(): integer
    {
        $circumference = array_sum([self::$a, self::$b, self::$c]);
        return (integer) $circumference;
    }

    

    

    
}


?>
