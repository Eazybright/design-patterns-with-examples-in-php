<?php 

require 'vendor/autoload.php';

// use Eazybright\DesignPatternsPHP\FactoryMethod\{Dialog, WebDialog, WindowsDialog};
use Eazybright\DesignPatternsPHP\Prototype\Application;

$app = new Application();
var_dump($app->makeShapeCopies());