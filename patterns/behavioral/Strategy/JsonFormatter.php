<?php

namespace Patterns\Behavioral\Strategy;

class JsonFormatter implements Formatter
{
    public function format(array $data)
    {
        return json_encode($data);
    }
}