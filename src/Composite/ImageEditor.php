<?php

namespace Eazybright\DesignPatternsPHP\Composite;

class ImageEditor
{
    protected CompoundGraphic $compoundGraphic;

    public function load()
    {
        $this->compoundGraphic = new CompoundGraphic();
        $this->compoundGraphic->add(new Dot(1, 2));
        $this->compoundGraphic->add(new Circle(5,3,10));
        $this->compoundGraphic->move(30, 50);
    }

    public function all()
    {
        return $this->compoundGraphic;
    }

    public function draw()
    {
        $this->compoundGraphic->draw();
    }
}