<?php

namespace Eazybright\DesignPatternsPHP\Builder\Interfaces;

/**
 * The builder interface specifies methods for creating the different parts of the product objects.
 */
interface Builder
{
    public function reset();

    public function setSeats(string $seats);

    public function setEngine(string $engine);

    public function setTripComputer(string $trip);

    public function setGPS(string $gps);
}