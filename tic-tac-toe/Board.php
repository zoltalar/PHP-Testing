<?php

final class Board 
{
    const MARK_X = 'X';
    const MARK_O = 'O';
    
    private ?SquareMap $map = null;   
    
    public function __construct($width, $height)
    {
        if ($width <= 0 || $height <= 0) {
            throw new \Exception('Invalid width and/or height!');
        }
        
        if ($width !== $height) {
            throw new \Exception('Board must be square!');
        }
        
        $this->map = new SquareMap(new Dimension($width, $height));
    }
    
    public function setPosition(Coordinable $position): self
    {        
        $this->map->setX($position->getX());
        $this->map->setY($position->getY());
        
        return $this;
    }
    
    public function getSquareMap(): SquareMap
    {
        return $this->map;
    }
    
    public function mark(string $mark): self
    {
        $this->map->mark($mark);
        
        return $this;
    }
}
