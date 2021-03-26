<?php

namespace Patterns\Behavioral\Strategy;

use SimpleXMLElement;

class XmlFormatter implements Formatter
{
    public function format(array $data)
    {
        $xml = $this->add($data, new SimpleXMLElement('<root />'));

        return $xml->asXML();
    }

    protected function add(array $data, SimpleXMLElement  $xml)
    {
        foreach ($data as $key => $value) {
            is_array($value)
                ? $this->add($value, $xml->addChild($key))
                : $xml->addChild($key, $value);
        }

        return $xml;
    }
}