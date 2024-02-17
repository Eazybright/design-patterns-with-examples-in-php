<?php

namespace Eazybright\DesignPatternsPHP\Composite;

class CompoundGraphic implements Graphic
{
    protected array $graphics = [];

    public function add(Graphic $graphic)
    {
        $this->graphics[] = $graphic;
    }

    public function remove(Graphic $graphic)
    {
        $this->graphics = array_filter($this->graphics, function ($item) use ($graphic) {
            return $item != $graphic;
        });
    }

    public function move($x, $y)
    {
        foreach($this->graphics as $graphic){
            $graphic->move($x, $y);
        }
    }

    public function draw()
    {
        foreach($this->graphics as $graphic){
            echo $graphic->draw();
        }
    }
}