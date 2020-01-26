<?php

namespace App\Services;

use App\Models\Circle;

class CircleService
{
    /**
     * @param float $radius
     * @return \App\Models\Circle
     */
    public function calculate(float $radius): Circle
    {
        // note: this could contain much more of the business logic,
        // something like send an email, log circle etc...

        return new Circle($radius);
    }
}
