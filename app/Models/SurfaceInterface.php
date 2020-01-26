<?php

namespace App\Models;

interface SurfaceInterface
{
    /**
     * @return float
     */
    public function calculateSurface(): float;
}
