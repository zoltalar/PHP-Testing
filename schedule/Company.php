<?php

final class Company 
{
    private int $id;
    private string $name;
    
    public function __construct(string $name)
    {
        $this->id = random_int(1, 100);
        $this->name = $name;
    }
    
    public function getId(): int
    {
        return $this->id;
    }
    
    public function getName(): string
    {
        return $this->name;
    }
}
