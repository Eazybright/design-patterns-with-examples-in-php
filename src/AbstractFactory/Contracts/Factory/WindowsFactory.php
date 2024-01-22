<?php

namespace Eazybright\DesignPatternsPHP\AbstractFactory\Contracts\Factory;

use Eazybright\DesignPatternsPHP\AbstractFactory\Interfaces\{Button, Checkbox, GUIFactory};
use Eazybright\DesignPatternsPHP\AbstractFactory\Contracts\{WindowsButton, WindowsCheckBox};

/**
 * Concrete factories produce a family of products that belong
 * to a single variant. The factory guarantees that the 
 * resulting products are compatible. Signatures of the concrete 
 * factory's methods return an abstract product, while inside 
 * the method a concrete product is instantiated.
 */
class WindowsFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return (new WindowsButton());
    }

    public function createCheckbox(): Checkbox
    {
        return (new WindowsCheckBox());
    }
}
