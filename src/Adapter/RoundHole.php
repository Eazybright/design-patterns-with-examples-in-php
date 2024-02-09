<?php

namespace Eazybright\DesignPatternsPHP\Adapter;

class RoundHole
{
    private int $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function fits(RoundPeg $peg)
    {
        return $this->getRadius() >= $peg->getRadius();
    }
}