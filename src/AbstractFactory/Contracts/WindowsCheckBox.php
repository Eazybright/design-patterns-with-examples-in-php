<?php

namespace Eazybright\DesignPatternsPHP\AbstractFactory\Contracts;

use Eazybright\DesignPatternsPHP\AbstractFactory\Interfaces\Checkbox;

class WindowsCheckbox implements Checkbox
{
    public function paint()
    {
        return "paint a windows checbox";
    }
}