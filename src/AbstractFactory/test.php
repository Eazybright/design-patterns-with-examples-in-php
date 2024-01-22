<?php 

require 'vendor/autoload.php';

use Eazybright\DesignPatternsPHP\AbstractFactory\Application;
use Eazybright\DesignPatternsPHP\AbstractFactory\Contracts\Factory\{MacFactory, WindowsFactory};

$factory1 = new WindowsFactory();
$application1 = new Application($factory1);
echo $application1->createUICheckbox().PHP_EOL;
echo $application1->createUIButton().PHP_EOL;

$factory2 = new MacFactory();
$application2 = new Application($factory2);
echo $application2->createUICheckbox().PHP_EOL;
echo $application2->createUIButton().PHP_EOL;
