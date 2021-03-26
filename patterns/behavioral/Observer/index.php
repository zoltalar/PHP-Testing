<?php

namespace Patterns\Behavioral\Observer;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'Article.php';
require 'Reader.php';

use Patterns\Behavioral\Observer\Article;
use Patterns\Behavioral\Observer\Reader;

$article = new Article('Bitcoin price reaches $60K');

$john = new Reader('John Smith');
$jane = new Reader('Jane McTest');

$article->attach($john);
$article->attach($jane);
$article->notify();
$article->detach($jane);
$article->notify();