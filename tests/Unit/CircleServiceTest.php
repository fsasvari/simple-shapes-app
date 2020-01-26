<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\CircleService;

class CircleServiceTest extends TestCase
{
    /**
     * @test
     */
    public function callCircleServiceCalculateMethod_ExpectSuccess()
    {
        $radius = 2;

        $circleService = new CircleService();
        $triangle = $circleService->calculate($radius);

        $this->assertEquals($triangle->getRadius(), $radius);
    }
}
