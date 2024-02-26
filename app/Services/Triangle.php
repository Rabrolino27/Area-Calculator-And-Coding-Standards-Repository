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
    
     public function surface(): string
    {
        $surface = sqrt(self::$s * (self::$s - self::$a) * (self::$s - self::$b) * (self::$s - self::$c));
        return (string) $surface;
    }

    public function diameter(): string
    {
        $stepA = sqrt(self::$s * (self::$s - self::$a) * (self::$s - self::$b) * (self::$s - self::$c));
        $stepB = self::$a * self::$b * self::$c;
        $stepC = 4 * $stepA;
        $radius = $stepB / $stepC;
        $diameter = 2 * $radius;
        return (integer) $diameter;
    }

    public function circumference(): string
    {
        $circumference = self::$a + self::$b + self::$c;
        return (string) $circumference;
    }

    

    

    
}


?>
