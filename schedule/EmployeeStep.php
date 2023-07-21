<?php

class EmployeeStep extends BaseStep implements Stepable
{
    protected string $name = 'employee';
    
    public function __construct() 
    {
        parent::__construct();
        $company = Registry::get('company');
        
        if ($company->hasDisclaimer()) {
            $this->substeps[] = new EmployeeDisclaimerStep();
        }
    }
    
    public function isDone(): bool
    {
        return $this->areSubstepsDone() && Registry::exists('employee');
    }
}