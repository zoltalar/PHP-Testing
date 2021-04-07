<?php

namespace Schedule;

use Schedule\Step;

class DependentsStep extends Step
{
    protected $name = 'dependents';

    public function __construct($type, Config $config, Employee $employee)
    {
        parent::__construct($type, $config, $employee);

        $this->addStep(new AddDependentStep($type, $config, $employee));
    }

    public function isDone(): bool
    {
        if ( (int) $this->config->register_dependents == 1)
            return count($this->getDependents()) > 0;

        return false;
    }

    public function render()
    {
        $view = View::factory("schedule/{$this->type}/dependents");

        $view->dependents = $this->getDependents();

        return $view;
    }
}