<?php

namespace Patterns\Creational\Factory;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'File.php';
require 'Factory.php';
require 'Media.php';
require 'MediaFactory.php';
require 'AudioMedia.php';
require 'ImageMedia.php';
require 'VideoMedia.php';

$img = new File('image', 'duke.jpg');
$audio = new File('audio', 'duke.mp3');
$video = new File('video', 'duke.mov');

var_dump(MediaFactory::createMedia($img)->getHtml());
var_dump(MediaFactory::createMedia($audio)->getHtml());
var_dump(MediaFactory::createMedia($video)->getHtml());