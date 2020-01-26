<?php

namespace Tests\Unit;

use App\Models\Circle;
use App\Models\Triangle;
use PHPUnit\Framework\TestCase;
use App\Services\GeometryCalculatorService;

class GeometryCalculatorServiceTest extends TestCase
{
    /**
     * @test
     */
    public function callGeometryCaculatorService_ExpectSuccess()
    {
        $radius = 2;
        $circle = new Circle($radius);

        $a = 2;
        $b = 3;
        $c = 4;
        $triangle = new Triangle($a, $b, $c);

        $geometryCalculatorService = new GeometryCalculatorService($circle, $triangle);

        $this->assertEquals(($circle->calculateSurface() + $triangle->calculateSurface()), $geometryCalculatorService->calculateShapeSurfaceSum());
        $this->assertEquals(($circle->calculateCircumference() + $triangle->calculateCircumference()), $geometryCalculatorService->calculateShapeCircumferenceSum());
    }
}
