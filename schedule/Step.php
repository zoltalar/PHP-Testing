<?php

namespace Schedule;

use Schedule\Contracts\Stepable as StepableContract;
use Schedule\Traits\Stepable;

abstract class Step implements StepableContract
{
    use Stepable;

    /** @var string */
    protected $type;

    /** @var Config */
    protected $config;

    /** @var Employee */
    protected $employee;

    /** @var string */
    protected $name;

    protected $substep = false;

    public function __construct($type, Config $config, Employee $employee)
    {
        $this->type = $type;
        $this->config = $config;
        $this->employee = $employee;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDependents(): array
    {
        return $this->employee->dependents->find_all();
    }

    public function isCurrent(): bool
    {
        return $this->getName() === Request::initial()->action();
    }

    public function isDone(): bool
    {
        return false;
    }

    public function isSubstep(): bool
    {
        return $this->substep === true;
    }

    abstract public function render();
}