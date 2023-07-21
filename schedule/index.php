<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'BaseStep.php';
require 'Company.php';
require 'Employee.php';
require 'RegistrationFlow.php';
require 'Registry.php';
require 'Stepable.php';
require 'EmployeeStep.php';
require 'OverviewStep.php';

Registry::set('company', new Company('Oracle'));

$flow = new RegistrationFlow();
print_r($flow->getSteps());