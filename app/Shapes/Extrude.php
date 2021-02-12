<?php

// Create an Extrude class in the App\Shapes namespace. On construction it should take a class that implements ShapeInterface as well as a depth. It should have a volume() method which returns the volume (area × depth) of the given shape. Make sure you use type-hinting to make sure you can't pass non-shapes into Extrude.

namespace App\Shapes;

class Extrude
{
    private $shape;
    private float $depth;

    public function __construct(ShapeInterface $shapeArg, float $depthArg)
    {
        $this->shape = $shapeArg;
        $this->depth = $depthArg;
    }

    public function volume()
    {
        return $this->shape->area() * $this->depth;

    }

}