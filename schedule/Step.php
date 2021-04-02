<?php

namespace Schedule;

abstract class Step
{
    /** @var Config */
    protected $config;

    /** @var string */
    protected $name;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isCompleted(): bool
    {
        return false;
    }

    abstract public function render();
}