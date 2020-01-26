<?php

namespace App\Models;

class Circle implements ShapeCalculateInterface
{
    /**
     * @var int|float
     */
    private $radius;

    /**
     * @param int|float $radius
     */
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return int|float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param int|float $radius
     */
    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function calculateCircumference(): float
    {
        return 2 * $this->getRadius() * pi();
    }

    /**
     * @return float
     */
    public function calculateSurface(): float
    {
        return pow($this->getRadius(), 2) * pi();
    }
}
