<?php

namespace Patterns\Creational\Factory;

class AudioMedia extends Media
{
    function getHtml(): string
    {
        return "<audio src='{$this->file->getPath()}' />";
    }
}