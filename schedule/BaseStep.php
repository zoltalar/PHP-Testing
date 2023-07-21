<?php

abstract class BaseStep
{
    protected string $name = '';
    
    public function getName(): string
    {
        return $this->name;
    }
}