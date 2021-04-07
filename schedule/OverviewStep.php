<?php

namespace Schedule;

use Schedule\Step;

class OverviewStep extends Step
{
    protected $name = 'overview';

    public function isDone(): bool
    {
        return true;
    }

    public function render()
    {
        $view = View::factory("schedule/{$this->type}/overview");

        $view->employee = $this->employee;

        return $view;
    }
}