<?php

namespace Schedule\Traits;

use Schedule\Step;

trait Stepable
{
    protected $steps = [];
    protected $index = 0;

    public function addStep(Step $step)
    {
        $this->steps[$this->index++] = $step;
    }

    public function getSteps(): array
    {
        return $this->steps;
    }
}