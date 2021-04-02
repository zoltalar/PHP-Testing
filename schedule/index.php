<?php

namespace Schedule;

use Schedule\Model\Company;

$config = new Config(new Company(1, 'AbbVie'));
$flow = new RegistrationFlow($config);