<?php

namespace Eazybright\DesignPatternsPHP\Prototype;

class Rectangle extends Shape
{
    protected $width;

    protected $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function __clone()
    {
        $this->width = $this->width;
        $this->height = $this->height;
    }
}