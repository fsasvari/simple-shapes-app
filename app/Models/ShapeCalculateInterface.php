<?php

namespace App\Models;

interface ShapeCalculateInterface
{
    /**
     * @return float
     */
    public function calculateSurface(): float;

    /**
     * @return float
     */
    public function calculateCircumference(): float;
}
