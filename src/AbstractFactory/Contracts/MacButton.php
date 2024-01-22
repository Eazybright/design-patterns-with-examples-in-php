<?php

namespace Eazybright\DesignPatternsPHP\AbstractFactory\Contracts;

use Eazybright\DesignPatternsPHP\AbstractFactory\Interfaces\Button;

/**
 * Concrete products are created by corresponding concrete factories.
 */
class MacButton implements Button
{
    public function paint()
    {
        return "paint a mac button";
    }
}