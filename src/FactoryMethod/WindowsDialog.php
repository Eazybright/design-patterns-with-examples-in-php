<?php

namespace Eazybright\DesignPatternsPHP\FactoryMethod;

use Eazybright\DesignPatternsPHP\FactoryMethod\Interfaces\Button;
use Eazybright\DesignPatternsPHP\FactoryMethod\Contracts\WindowsButton;

class WindowsDialog extends Dialog
{
    public function createButton(): Button
    {
        return (new WindowsButton());
    }
}