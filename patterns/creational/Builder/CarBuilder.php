<?php

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Builder as BuilderInterface;
use Patterns\Creational\Builder\Parts\Car;
use Patterns\Creational\Builder\Parts\Door;
use Patterns\Creational\Builder\Parts\Engine;
use Patterns\Creational\Builder\Parts\Wheel;
use Patterns\Creational\Builder\Parts\Vehicle;

class CarBuilder implements BuilderInterface
{
    private $car;

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function addWheel()
    {
        for ($i=1; $i<=4; $i++) {
            $this->car->setPart("wheel{$i}", new Wheel());
        }
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addDoors()
    {
        $this->car->setPart('door-left', new Door());
        $this->car->setPart('door-right', new Door());
        $this->car->setPart('door-back', new Door());
    }

    public function getVehicle()
    {
        return $this->car;
    }
}