<?php

namespace App\Shapes;

class Square implements ShapeInterface
{
    private float $sideLength;

    public function __construct($sideLengthArg)
    {
        $this->sideLength = $sideLengthArg;
    }

    public function area() : float
    {
        return $this->sideLength * $this->sideLength;
    }
}