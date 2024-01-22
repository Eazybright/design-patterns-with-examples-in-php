<?php

namespace Eazybright\DesignPatternsPHP\FactoryMethod;

use Eazybright\DesignPatternsPHP\FactoryMethod\Interfaces\Button;

abstract class Dialog
{
    abstract public function createButton(): Button;

    public function render(): string
    {
        $createButton = $this->createButton();

        return get_class($createButton)."\n".$createButton->onClick()."\n".$createButton->render();
    }
}