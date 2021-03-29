<?php

namespace Patterns\Creational\Builder\Parts;

abstract class Vehicle
{
    private $data = [];

    public function setPart(string $key, object $value)
    {
        $this->data[$key] = $value;

        return $this;
    }
}