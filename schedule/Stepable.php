<?php

interface Stepable
{
    public function isDone(): bool;
    public function getName(): string;
}