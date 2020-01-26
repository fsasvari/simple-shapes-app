<?php

namespace App\Mappers\Response;

use App\Models\Circle;
use App\Enums\ShapeTypeEnum;

class CircleCalculateResponseMapper extends ResponseMapper
{
    /**
     * @var \App\Models\Circle
     */
    private $circle;

    /**
     * @param \App\Models\Circle $circle
     */
    public function __construct(Circle $circle)
    {
        $this->circle = $circle;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'type'          => ShapeTypeEnum::Circle,
            'radius'        => $this->circle->getRadius(),
            'surface'       => $this->circle->calculateSurface(),
            'circumference' => $this->circle->calculateCircumference(),
        ];
    }
}
