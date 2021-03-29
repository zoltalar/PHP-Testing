<?php

namespace Patterns\Creational\Factory;

use Patterns\Creational\Factory\Media;

interface Factory
{
    public static function createMedia(File $file): Media;
}