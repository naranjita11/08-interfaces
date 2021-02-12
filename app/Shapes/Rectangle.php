<?php

namespace App\Shapes;

class Rectangle implements ShapeInterface
{
    private float $width;
    private float $height;

    public function __construct($widthArg, $heightArg)
    {
        $this->width = $widthArg;
        $this->height = $heightArg;
    }

    public function area() : float
    {
        return $this->width * $this->height;
    }


    
}