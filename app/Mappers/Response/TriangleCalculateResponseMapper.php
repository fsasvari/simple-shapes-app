<?php

namespace App\Mappers\Response;

use App\Models\Triangle;
use App\Enums\ShapeTypeEnum;

class TriangleCalculateResponseMapper extends ResponseMapper
{
    /**
     * @var \App\Models\Triangle
     */
    private $triangle;

    /**
     * @param \App\Models\Triangle $triangle
     */
    public function __construct(Triangle $triangle)
    {
        $this->triangle = $triangle;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'type'          => ShapeTypeEnum::Triangle,
            'a'             => $this->triangle->getA(),
            'b'             => $this->triangle->getB(),
            'c'             => $this->triangle->getC(),
            'surface'       => $this->triangle->calculateSurface(),
            'circumference' => $this->triangle->calculateCircumference(),
        ];
    }
}
