<?php

namespace Schedule;

abstract class Step
{
    /** @var Config */
    protected $config;

    /** @var Employee */
    protected $employee;

    /** @var string */
    protected $name;

    public function __construct(Config $config, EmployeeStep $employee)
    {
        $this->config = $config;
        $this->employee = $employee;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isActive(): bool
    {
        return $this->getName() === Request::initial()->action();
    }

    public function isDone(): bool
    {
        return false;
    }

    abstract public function render();
}