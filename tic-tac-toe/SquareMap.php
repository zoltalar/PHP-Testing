<?php

final class SquareMap
{
    private ?Dimension $size = null;
    private array $map = [];
    private int $x = 0;
    private int $y = 0;
    private int $markCounter = 0;
    
    public function __construct(Dimension $size) 
    {
        $this->size = $size;
        $this->initialize();
    }
    
    private function initialize(): void
    {
        for ($i = 0 ; $i < $this->size->getHeight() ; $i++) {
            $row = [];
            
            for ($j = 0; $j < $this->size->getWidth() ; $j++) {
                $row[$j] = null;
            }
            
            $this->map[$i] = $row;
        }
    }
    
    public function getSize(): Dimension
    {
        return $this->size;
    }
    
    public function getMap(): array
    {
        return $this->map;
    }
    
    public function getX(): int 
    {
        return $this->x;
    }
    
    public function setX(int $x): self
    {
        $this->x = $x;
        
        return $this;
    }
    
    public function getY(): int 
    {
        return $this->y;
    }
    
    public function setY(int $y): self
    {
        $this->y = $y;
        
        return $this;
    }
    
    public function mark(string $mark)
    {
        $this->map[$this->getX()][$this->getY()] = $mark;
        $this->markCounter++;
    }
    
    public function getMarkCounter(): int
    {
        return $this->markCounter;
    }
}