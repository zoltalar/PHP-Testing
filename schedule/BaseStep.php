<?php

abstract class BaseStep
{
    protected array $session = [];
    protected string $name = '';
    protected array $substeps = [];
    
    public function __construct() 
    {
        $this->session = $_SESSION;
    }

    public function isCurrent(): bool
    {
        return $this->getName() === Request::initial()->action();
    }
    
    public function areSubstepsDone(): bool
    {
        $count = 0;
        
        foreach ($this->substeps as $substep) {
            if ($substep->isDone()) {
                $count++;
            }
        }
        
        return $count === count($this->substeps);
    }
    
    public function getName(): string
    {
        return $this->name;
    }
}