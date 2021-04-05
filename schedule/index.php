<?php

namespace Schedule;

use Schedule\Model\Company;

$config = new Config(new Company(1, 'AbbVie'));
$employee = new Employee(1, 'John Smith');
$flow = new RegistrationFlow('new', $config, $employee);

