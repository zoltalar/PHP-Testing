<?php

namespace Schedule;

class OverviewStep extends Step
{
    protected $name = 'overview';

    public function isDone(): bool
    {
        return true;
    }

    public function render()
    {
        return View::factory('schedule/new/overview');
    }
}