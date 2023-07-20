<?php

final class Dimension
{
    private int $width = 0;
    private int $height = 0;
    
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function getWidth(): int
    {
        return $this->width;
    }
    
    public function getHeight(): int
    {
        return $this->height;
    }
    
    public function setSize(int $width, int $height): self
    {
        $this->width = $width;
        $this->height = $height;
        
        return $this;
    }
    
    public function getSize(): Dimension
    {
        return new Dimension($this->width, $this->height);
    }
}