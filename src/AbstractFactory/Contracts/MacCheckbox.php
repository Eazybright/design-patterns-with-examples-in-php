<?php

namespace Eazybright\DesignPatternsPHP\AbstractFactory\Contracts;

use Eazybright\DesignPatternsPHP\AbstractFactory\Interfaces\Checkbox;

/**
 * Concrete products are created by corresponding concrete factories.
 */
class MacCheckbox implements Checkbox
{
    public function paint()
    {
        return "paint a mac checbox";
    }
}