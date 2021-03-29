<?php

namespace Patterns\Creational\Factory;

class ImageMedia extends Media
{
    function getHtml(): string
    {
        return "<img src='{$this->file->getPath()}' />";
    }
}