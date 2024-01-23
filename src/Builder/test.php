<?php 

require 'vendor/autoload.php';

use Eazybright\DesignPatternsPHP\Builder\Contracts\{CarBuilder, CarManualBuilder};
use Eazybright\DesignPatternsPHP\Builder\Director;

function testBuilder(Director $director)
{
    $builder = new CarBuilder();
    $director->setBuilder($builder);
    $director->constructSportCar();
    $car = $builder->getProduct();
    echo "Construction of a sport car:\n";
    var_dump($car);

    echo "Publish manual of the sport car:\n";

    $manual = new CarManualBuilder();
    $director->setBuilder($manual);
    $director->publishSportCarManual();
    $car = $builder->getProduct();
    var_dump($manual);
}

testBuilder(new Director());