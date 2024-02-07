<?php

namespace Eazybright\DesignPatternsPHP\Prototype;

class Application
{
    private array $shapes;

    public function __construct()
    {
        $circle = new Circle(10, 20, 30);
        $this->shapes[] = $circle;

        $anotherCircle = clone $circle;
        $this->shapes[] = $anotherCircle;

        $rectangle = new Rectangle(40, 50);
        $this->shapes[] = $rectangle;
    }

    public function makeShapeCopies()
    {
        $shapesCopy = [];

        foreach($this->shapes as $shape){
            $shapesCopy[] = clone $shape;
        }
        return $shapesCopy;
    }
}