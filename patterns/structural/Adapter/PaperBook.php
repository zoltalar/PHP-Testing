<?php

namespace Patterns\Structural\Adapter;

class PaperBook implements Book
{
    /** @var int */
    private $page;

    public function turnPage()
    {
        $this->page++;
    }

    public function open()
    {
        $this->page = 1;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}