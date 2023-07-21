<?php

interface Stepable
{
    public function isCurrent(): bool;
    public function isDone(): bool;
    public function getName(): string;
}