<?php

namespace App\Shapes;

class Circle implements ShapeInterface
{
    private float $radius;

    public function __construct($radiusArg)
    {
        $this->radius = $radiusArg;
    }

    public function area() : float
    {
        return M_PI * $this->radius * $this->radius;
    }
   
}