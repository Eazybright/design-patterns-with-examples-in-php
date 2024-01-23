<?php

namespace Eazybright\DesignPatternsPHP\Builder;

use Eazybright\DesignPatternsPHP\Builder\Interfaces\Builder;

class Director
{
    private Builder $builder;

    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function constructSportCar(): void
    {
        $this->builder->reset();
        $this->builder->setSeats(2);
        $this->builder->setEngine('V6-Engine');
        $this->builder->setTripComputer(true);
        $this->builder->setGPS(true);
    }

    public function publishSportCarManual(): void
    {
        $this->builder->reset();
        $this->builder->setSeats("document sport car seat features");
        $this->builder->setEngine("document how the engine works and maintenance guidelines");
        $this->builder->setTripComputer("document how to set trip computer");
        $this->builder->setGPS("document how to set the sport car GPS");
    }
}