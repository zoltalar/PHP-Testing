<?php

namespace Patterns\Creational\Builder;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'Parts/Vehicle.php';
require 'Parts/Car.php';
require 'Parts/Door.php';
require 'Parts/Engine.php';
require 'Parts/Truck.php';
require 'Parts/Wheel.php';
require 'Builder.php';
require 'CarBuilder.php';
require 'Director.php';
require 'TruckBuilder.php';

$director = new Director();

$carBuilder = new CarBuilder();
$car = $director->build($carBuilder);

print_r($car);