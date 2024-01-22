<?php

namespace Eazybright\DesignPatternsPHP\AbstractFactory;

use Eazybright\DesignPatternsPHP\AbstractFactory\Interfaces\{Button, Checkbox, GUIFactory};

/**
 * The client code works with factories and products only
 * through abstract types: GUIFactory, Button and Checkbox. This
 * lets you pass any factory or product subclass to the client 
 * code without breaking it.
 */
class Application
{
    private GUIFactory $factory;

    private Button $button;

    private Checkbox $checkbox;

    public function __construct(GUIFactory $factory)
    {
        $this->factory = $factory;
    }

    public function createUIButton()
    {
        $this->button = $this->factory->createButton();
        return $this->button->paint();
    }

    public function createUICheckbox()
    {
        $this->checkbox = $this->factory->createCheckbox();
        return $this->checkbox->paint();
    }
}   