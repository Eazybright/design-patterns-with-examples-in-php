<?php

namespace Eazybright\DesignPatternsPHP\AbstractFactory\Contracts\Factory;

use Eazybright\DesignPatternsPHP\AbstractFactory\Interfaces\{Button, Checkbox, GUIFactory};
use Eazybright\DesignPatternsPHP\AbstractFactory\Contracts\{MacButton, MacCheckBox};

/**
 * Concrete factories produce a family of products that belong
 * to a single variant. The factory guarantees that the 
 * resulting products are compatible. Signatures of the concrete 
 * factory's methods return an abstract product, while inside 
 * the method a concrete product is instantiated.
 */
class MacFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return (new MacButton());
    }

    public function createCheckbox(): Checkbox
    {
        return (new MacCheckbox());
    }
}
