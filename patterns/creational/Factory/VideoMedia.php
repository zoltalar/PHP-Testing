<?php

namespace Patterns\Creational\Factory;

class VideoMedia extends Media
{
    function getHtml(): string
    {
        return "<video src='{$this->file->getPath()}' />";
    }
}