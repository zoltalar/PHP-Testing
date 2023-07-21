<?php

final class RegistrationFlow
{
    private array $session = [];
    private array $steps = [];
    
    public function __construct()
    {        
        $this->session = $_SESSION;
        
        $this->addStep(new OverviewStep());
        $this->addStep(new EmployeeStep());
    }
    
    private function addStep(Stepable $step)
    {
        if (array_key_exists($step->getName(), $this->steps)) {
            throw new \Exception('Step already defined in the flow!');
        }
        
        $this->steps[$step->getName()] = $step;
    }
    
    public function getSteps(): array
    {
        return $this->steps;
    }
}
