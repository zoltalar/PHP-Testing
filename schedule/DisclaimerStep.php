<?php

namespace Schedule;

class DisclaimerStep extends Step
{
    public function render()
    {
        return View::factory("schedule/{$this->type}/disclaimer");
    }

    public function store()
    {

    }
}