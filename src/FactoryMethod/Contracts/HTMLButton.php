<?php

namespace Eazybright\DesignPatternsPHP\FactoryMethod\Contracts;

use Eazybright\DesignPatternsPHP\FactoryMethod\Interfaces\Button;

class HTMLButton implements Button
{
    public function render()
    {
        return "HTML button rendered";
    }

    public function onClick()
    {
        return "HTML button clicked";
    }
}