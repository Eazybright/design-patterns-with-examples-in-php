<?php

namespace Eazybright\DesignPatternsPHP\Prototype;

class Circle extends Shape
{
    protected $radius;

    public function __construct($x, $y, $radius)
    {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    public function __clone()
    {
        $this->radius = $this->radius;
    }
}