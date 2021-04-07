<?php

namespace Schedule;

use Schedule\Step;

class EmployeeStep extends Step
{
    protected $name = 'employee';

    public function isDone(): bool
    {
        return $this->employee->loaded();
    }

    public function render()
    {
        return View::factory("schedule/{$this->type}/employee");
    }
}