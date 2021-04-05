<?php

namespace Schedule;

class EmployeeStep extends Step
{
    protected $name = 'employee';

    public function isDone(): bool
    {
        return $this->employee->loaded();
    }

    public function render()
    {
        return View::factory('schedule/new/employee');
    }
}