<?php

namespace Patterns\Creational\Factory;

use Patterns\Creational\Factory\Factory;

class MediaFactory implements Factory
{
    public static function createMedia(File $file): Media
    {
        switch ($file->getType()) {
            case File::TYPE_IMAGE:
                return new ImageMedia($file);
                break;
            case File::TYPE_AUDIO:
                return new AudioMedia($file);
                break;
            case File::TYPE_VIDEO:
                return new VideoMedia($file);
                break;
        }
    }
}