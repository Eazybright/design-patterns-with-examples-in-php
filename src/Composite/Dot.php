<?php

namespace Eazybright\DesignPatternsPHP\Composite;

class Dot implements Graphic
{
    protected int $x, $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y =  $y;
    }

    public function move($x, $y)
    {
        $this->x += $x;
        $this->y += $y;
    }

    public function draw()
    {
        return "a dot is drawn at position (".$this->x.",".$this->y.")".PHP_EOL;
    }
}