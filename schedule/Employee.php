<?php

class Employee 
{
    private int $id;
    private string $firstName;
    private string $lastName;
    
    public function __construct(string $firstName, string $lastName)
    {
        $this->id = random_int(1, 100);
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    
    public function getId(): int
    {
        return $this->id;
    }
    
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    
    public function getLastName(): string
    {
        return $this->lastName;
    }
}
