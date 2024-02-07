<?php

namespace Eazybright\DesignPatternsPHP\Prototype;

abstract class Shape
{
    protected $x;

    protected $y;

    protected $color;

    abstract public function __clone();
}