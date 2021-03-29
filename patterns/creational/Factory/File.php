<?php

namespace Patterns\Creational\Factory;

class File
{
    /** @var string */
    private $type;

    /** @var string */
    private $path;

    const TYPE_IMAGE = 'image';
    const TYPE_VIDEO = 'video';
    const TYPE_AUDIO = 'audio';

    const TYPES = [
        self::TYPE_IMAGE,
        self::TYPE_VIDEO,
        self::TYPE_AUDIO
    ];

    public function __construct(string $type, string $path)
    {
        if ( ! in_array($type, self::TYPES)) {
            throw new \Exception("{$type} type is not supported");
        }

        $this->type = $type;
        $this->path = $path;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getPath(): string
    {
        return $this->path;
    }
}