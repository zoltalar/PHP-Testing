<?php

class EmployeeStep extends BaseStep implements Stepable
{
    protected string $name = 'employee';
    
    public function isDone(): bool
    {
        return Registry::exists('employee');
    }
}