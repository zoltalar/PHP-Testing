<?php

namespace Schedule;

class EmployeeStep extends Step
{
    protected $name = 'overview';

    public function isCompleted(): bool
    {
        return true;
    }

    public function render()
    {
        return View::factory('schedule/new/employee');
    }
}