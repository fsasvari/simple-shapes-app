<?php

namespace App\Services;

use App\Models\Triangle;

class TriangleService
{
    /**
     * @param float $a
     * @param float $b
     * @param float $c
     * @return \App\Models\Triangle
     */
    public function calculate(float $a, float $b, float $c): Triangle
    {
        // note: this could contain much more of the business logic,
        // something like send an email, log triangle etc...

        return new Triangle($a, $b, $c);
    }
}
