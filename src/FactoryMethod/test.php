<?php 

require 'vendor/autoload.php';

use Eazybright\DesignPatternsPHP\FactoryMethod\{Dialog, WebDialog, WindowsDialog};

function testFactoryMethod(Dialog $dialog)
{
    echo "a particular creator class is being called. Who please? \n".$dialog->render();
}

testFactoryMethod(new WebDialog());
echo "\n";
testFactoryMethod(new WindowsDialog());
