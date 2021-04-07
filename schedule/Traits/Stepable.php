<?php

namespace Schedule\Traits;

use Schedule\Step;

trait Stepable
{
    protected $steps = [];

    public function addStep(Step $step)
    {
        $this->steps[] = $step;
    }

    public function getSteps(): array
    {
        return $this->steps;
    }
}