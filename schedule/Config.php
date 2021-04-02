<?php

namespace Schedule;

class Config
{
    /** @var Company */
    protected $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function __get($name)
    {
        if ( ! property_exists($this->company, $name)) {
            throw new \Exception("{$name} not found in the configuration");
        }

        return $this->company->{$name};
    }
}