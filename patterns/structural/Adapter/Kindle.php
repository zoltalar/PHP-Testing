<?php

namespace Patterns\Structural\Adapter;

class Kindle implements EBook
{
    private $page = 1;
    private $totalPages = 100;

    public function unlock() {}

    public function pressNext()
    {
        $this->page++;
    }

    public function getPage(): array
    {
        return [
            $this->page,
            $this->totalPages
        ];
    }
}