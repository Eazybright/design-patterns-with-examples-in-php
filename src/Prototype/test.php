<?php 

require 'vendor/autoload.php';

use Eazybright\DesignPatternsPHP\Prototype\Application;

$app = new Application();
var_dump($app->makeShapeCopies());