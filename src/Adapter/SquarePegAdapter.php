<?php

namespace Eazybright\DesignPatternsPHP\Adapter;

class SquarePegAdapter extends RoundPeg
{
    private SquarePeg $peg;

    public function __construct(SquarePeg $peg)
    {
        $this->peg = $peg;
    }

    public function getRadius(): int
    {
        return $this->peg->getWidth() * (int)(sqrt(2) / 2);
    }
}