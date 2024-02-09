<?php

namespace Eazybright\DesignPatternsPHP\Adapter;

class RoundPeg
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
}