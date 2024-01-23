<?php

namespace Eazybright\DesignPatternsPHP\Builder\Contracts;

use Eazybright\DesignPatternsPHP\Builder\Interfaces\Builder;
use Eazybright\DesignPatternsPHP\Builder\Manual;

/**
 * The concrete builder classes follow the builder interface and
 * provide specific implementations of the building steps. Your 
 * program may have several variations of builders, each implemented differently.
 */
class CarManualBuilder implements Builder
{
    private Manual $manual;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->manual = new Manual();
    }

    public function setSeats($seats)
    {
        $this->manual->noOfSeats = $seats;
    }

    public function setEngine(string $engine)
    {
        $this->manual->engine = $engine;
    }

    public function setTripComputer(string $trip)
    {
        $this->manual->tripComputer = $trip;
    }

    public function setGPS(string $gps)
    {
        $this->manual->gps = $gps;
    }

    /**
     * Concrete builders are supposed to provide their own methods for retrieving results. 
     * That's because various types of builders may create entirely different products 
     * that don't all follow the same interface.
     */
    public function getProduct(): Manual
    {
        $product = $this->manual;
        $this->reset();
        return $product;
    }
}