<?php

namespace Eazybright\DesignPatternsPHP\Builder\Contracts;

use Eazybright\DesignPatternsPHP\Builder\Interfaces\Builder;
use Eazybright\DesignPatternsPHP\Builder\Car;

/**
 * The concrete builder classes follow the builder interface and
 * provide specific implementations of the building steps. Your 
 * program may have several variations of builders, each implemented differently.
 */
class CarBuilder implements Builder
{
    private Car $car;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->car = new Car();
    }

    public function setSeats($seats): void
    {
        $this->car->noOfSeats = $seats;
    }

    public function setEngine(string $engine): void
    {
        $this->car->engine = $engine;
    }

    public function setTripComputer(string $trip): void
    {
        $this->car->tripComputer = $trip;
    }

    public function setGPS(string $gps): void
    {
        $this->car->gps = $gps;
    }

    /**
     * Concrete builders are supposed to provide their own methods for retrieving results. 
     * That's because various types of builders may create entirely different products 
     * that don't all follow the same interface.
     */
    public function getProduct(): Car
    {
        $product = $this->car;
        $this->reset();
        return $product;
    }
}