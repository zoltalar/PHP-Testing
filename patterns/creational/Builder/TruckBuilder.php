<?php

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Builder as BuilderInterface;
use Patterns\Creational\Builder\Parts\Door;
use Patterns\Creational\Builder\Parts\Engine;
use Patterns\Creational\Builder\Parts\Truck;
use Patterns\Creational\Builder\Parts\Wheel;

class TruckBuilder implements BuilderInterface
{
    private $truck;

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function addWheel()
    {
        for ($i=1; $i<=6; $i++) {
            $this->truck->setPart("wheel{$i}", new Wheel());
        }
    }

    public function addEngine()
    {
        $this->truck->setPart('engine', new Engine());
    }

    public function addDoors()
    {
        $this->truck->setPart('door-left', new Door());
        $this->truck->setPart('door-right', new Door());
    }

    public function getVehicle()
    {
        return $this->truck;
    }
}