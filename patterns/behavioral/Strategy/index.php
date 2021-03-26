<?php

namespace Patterns\Behavioral\Strategy;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'Context.php';
require 'Formatter.php';
require 'JsonFormatter.php';
require 'XmlFormatter.php';

use Patterns\Behavioral\Strategy\Context;

$employee = [
    'name' => 'John Smith',
    'company' => 'Company',
    'position' => 'Senior PHP Developer'
];

$jsonContext = new Context('json');
echo $jsonContext->formatData($employee) . '<br>';

$xmlContext = new Context('xml');
echo htmlentities($xmlContext->formatData($employee));