<?php

namespace Eazybright\DesignPatternsPHP\Composite;

interface Graphic
{
    public function move(int $x, int $y);

    public function draw();
}