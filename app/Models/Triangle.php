<?php

namespace App\Models;

class Triangle implements ShapeCalculateInterface
{
    /**
     * @var float
     */
    private $a;

    /**
     * @var float
     */
    private $b;

    /**
     * @var float
     */
    private $c;

    /**
     * @param int|float $a
     * @param int|float $b
     * @param int|float $c
     */
    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * @return float
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @param float $a
     */
    public function setA(float $a): void
    {
        $this->a = $a;
    }

    /**
     * @return float
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     * @param float $b
     */
    public function setB(float $b): void
    {
        $this->b = $b;
    }

    /**
     * @return float
     */
    public function getC(): float
    {
        return $this->c;
    }

    /**
     * @param float $c
     */
    public function setC(float $c): void
    {
        $this->c = $c;
    }

    /**
     * @inheritDoc
     */
    public function calculateCircumference(): float
    {
        return $this->getA() + $this->getB() + $this->getC();
    }

    /**
     * @inheritDoc
     */
    public function calculateSurface(): float
    {
        return $this->getA() * $this->getB() / 2;
    }
}
