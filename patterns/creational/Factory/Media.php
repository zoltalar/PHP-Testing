<?php

namespace Patterns\Creational\Factory;

abstract class Media
{
    /** @var File */
    protected $file;

    public function __construct(File $file)
    {
        $this->file = $file;
    }

    abstract function getHtml(): string;
}