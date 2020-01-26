<?php

namespace App\Services;

use App\Models\ShapeCalculateInterface;

class GeometryCalculatorService
{
    /**
     * @var \App\Models\ShapeCalculateInterface
     */
    private $shapeObject1;

    /**
     * @var \App\Models\ShapeCalculateInterface
     */
    private $shapeObject2;

    /**
     * @param \App\Models\ShapeCalculateInterface $shapeObject1
     * @param \App\Models\ShapeCalculateInterface $shapeObject2
     */
    public function __construct(ShapeCalculateInterface $shapeObject1, ShapeCalculateInterface $shapeObject2)
    {
        $this->shapeObject1 = $shapeObject1;
        $this->shapeObject2 = $shapeObject2;
    }

    /**
     * @return float
     */
    public function calculateShapeSurfaceSum(): float
    {
        return $this->shapeObject1->calculateSurface() + $this->shapeObject2->calculateSurface();
    }

    /**
     * @return float
     */
    public function calculateShapeCircumferenceSum(): float
    {
        return $this->shapeObject1->calculateCircumference() + $this->shapeObject2->calculateCircumference();
    }
}
