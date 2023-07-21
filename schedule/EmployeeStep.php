<?php

class EmployeeStep extends BaseStep implements Stepable
{
    protected string $name = 'employee';
    
    public function isDone(): bool
    {
        return $this->areSubstepsDone() && Registry::exists('employee');
    }
}