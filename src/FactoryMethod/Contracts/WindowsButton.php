<?php

namespace Eazybright\DesignPatternsPHP\FactoryMethod\Contracts;

use Eazybright\DesignPatternsPHP\FactoryMethod\Interfaces\Button;

class WindowsButton implements Button
{
    public function render()
    {
        return "Windows Button rendered";
    }

    public function onClick()
    {
        return "Windows Button clicked";
    }
}