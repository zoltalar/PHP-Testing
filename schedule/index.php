<?php

namespace Schedule;

use Schedule\Model\Company;

$config = new Config(new Company(1, 'AbbVie'));
$employee = new Employee(1, 'John Smith');
$flow = new RegistrationFlow('new', $config, $employee);

$step = $flow->currentStep()[1];

if ($step->getName() == 'disclaimer')
{
    if (HTTP_Request::POST == $this->request->method())
    {
        $employee = ORM::factory('Employee')
            ->values($this->request->post())
            ->save();

        if ($employee->saved())
        {
            $step->store();
        }
    }
}