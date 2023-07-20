<?php

class RandomPosition implements Coordinable
{
    private ?SquareMap $map = null;
    
    public function __construct(SquareMap $map) 
    {
        $this->map = $map;
    }
    
    public function getX(): int
    {
        return random_int(0, $this->map->getSize()->getWidth() - 1);
    }
    
    public function getY(): int
    {
        return random_int(0, $this->map->getSize()->getHeight() - 1);
    }
}
