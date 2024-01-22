<?php

namespace Eazybright\DesignPatternsPHP\FactoryMethod;

use Eazybright\DesignPatternsPHP\FactoryMethod\Interfaces\Button;
use Eazybright\DesignPatternsPHP\FactoryMethod\Contracts\HTMLButton;

class WebDialog extends Dialog
{
    public function createButton(): Button
    {
        return (new HTMLButton());
    }
}