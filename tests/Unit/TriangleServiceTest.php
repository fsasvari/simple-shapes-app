<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\TriangleService;

class TriangleServiceTest extends TestCase
{
    /**
     * @test
     */
    public function callTriangleServiceCalculateMethod_ExpectSuccess()
    {
        $a = 2;
        $b = 3;
        $c = 4;

        $triangleService = new TriangleService();
        $triangle = $triangleService->calculate($a, $b, $c);

        $this->assertEquals($triangle->getA(), $a);
        $this->assertEquals($triangle->getB(), $b);
        $this->assertEquals($triangle->getC(), $c);
    }
}
