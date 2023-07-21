<?php

final class RegistrationFlow
{
    private array $session = [];
    private array $steps = [];
    
    public function __construct()
    {        
        $this->session = $_SESSION;        
        $this->build();
    }
    
    private function build(): void
    {
        $company = Registry::get('company');
        $substeps = [];
        
        $this->addStep(new OverviewStep());
        
        if ($company->hasDisclaimer()) {
            $substeps[] = new EmployeeDisclaimerStep();
        }
        
        $this->addStep(new EmployeeStep($substeps));
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
    
    public function hasStep(string $name)
    {
        return array_key_exists($name, array_keys($this->steps));
    }
}
