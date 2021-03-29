<?php

namespace Patterns\Structural\Adapter;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'Book.php';
require 'EBook.php';
require 'EBookAdapter.php';
require 'Kindle.php';
require 'PaperBook.php';

$book = new PaperBook();
$book->open();
$book->turnPage();

var_dump(2 == $book->getPage());

$kindle = new Kindle();
$book = new EBookAdapter($kindle);

$book->open();
$book->turnPage();

var_dump(2 == $book->getPage());