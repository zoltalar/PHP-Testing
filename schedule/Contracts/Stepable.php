<?php

namespace Schedule\Contracts;

use Schedule\Step;

interface Stepable
{
    public function addStep(Step $step);

    public function getSteps(): array;
}