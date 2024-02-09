<?php

namespace Eazybright\DesignPatternsPHP\Adapter;

class SquarePeg
{
    private int $width;

    public function __construct($width)
    {
        $this->width = $width;
    }

    public function getWidth(): int
    {
        return $this->width;
    }
}