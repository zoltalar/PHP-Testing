<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

require 'BaseStep.php';
require 'Company.php';
require 'Employee.php';
require 'RegistrationFlow.php';
require 'Registry.php';
require 'Stepable.php';
require 'EmployeeStep.php';
require 'EmployeeDisclaimerStep.php';
require 'OverviewStep.php';

Registry::set('company', new Company('Oracle'));
Registry::set('employee', new Employee('John', 'Smith'));

$flow = new RegistrationFlow();

foreach ($flow->getSteps() as $step) {
    echo '<p>' . $step->getName() . ': ' . var_export($step->isDone(), true) . '</p>';
}