<?php

namespace Patterns\Behavioral\Strategy;

class Context
{
    const TYPE_JSON = 'json';
    const TYPE_XML = 'xml';

    /** @var Formatter */
    private $formatter;

    public function __construct($type)
    {
        switch ($type) {
            case self::TYPE_JSON:
                $this->formatter = new JsonFormatter();
                break;
            case self::TYPE_XML:
                $this->formatter = new XmlFormatter();
                break;
            default:
                throw new \InvalidArgumentException("{$type} output type is not supported");
        }
    }

    public function formatData(array $data)
    {
        return $this->formatter->format($data);
    }
}