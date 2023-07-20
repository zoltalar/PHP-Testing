<?php

class Position implements Coordinable
{
    private int $x = 1;
    private int $y = 1;
    
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function getX(): int
    {
        return $this->x - 1;
    }
    
    public function getY(): int
    {
        return $this->y - 1;
    }
}
