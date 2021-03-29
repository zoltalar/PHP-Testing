<?php

namespace Patterns\Stuctural\Facade;

interface OperatingSystem
{
    public function halt();
    public function getName(): string;
}