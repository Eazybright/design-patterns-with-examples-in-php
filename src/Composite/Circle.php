<?php

namespace Eazybright\DesignPatternsPHP\Composite;

class Circle extends Dot
{
    protected float $radius;

    public function __construct($x, $y, $radius)
    {
        parent::__construct($x, $y);
        $this->radius = $radius;
    }

    public function draw()
    {
        return "draw a circle with radius: ".$this->radius." at position (".$this->x.",".$this->y.")".PHP_EOL;
    }
}