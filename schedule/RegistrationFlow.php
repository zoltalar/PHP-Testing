<?php

class RegistrationFlow 
{
    private array $steps = [];
    
    public function __construct()
    {        
        $this->addStep(new OverviewStep());
        $this->addStep(new EmployeeStep());
    }
    
    private function addStep(Stepable $step)
    {
        if (array_key_exists($step->getName(), $this->steps)) {
            throw new \Exception('Step already exists in the flow!');
        }
        
        $this->steps[$step->getName()] = $step;
    }
    
    public function getSteps(): array
    {
        return $this->steps;
    }
}
