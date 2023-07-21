<?php

class OverviewStep extends BaseStep implements Stepable
{
    protected string $name = 'overview';

    public function isDone(): bool
    {
        return true;
    }
}