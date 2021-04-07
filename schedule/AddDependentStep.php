<?php

namespace Schedule;

class AddDependentStep extends Step
{
    protected $name = 'add_dependent';

    protected $substep = true;

    public function render()
    {
        return View::factory("schedule/{$this->type}/add_dependent");
    }
}