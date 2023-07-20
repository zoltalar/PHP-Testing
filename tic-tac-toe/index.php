<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'Board.php';
require 'TicTacToe.php';
require 'Coordinable.php';
require 'Position.php';
require 'RandomPosition.php';
require 'Dimension.php';
require 'SquareMap.php';

try {
    $game = new TicTacToe();
    $board = $game->getBoard();
    $board->setPosition(new Position(1, 1))->mark(Board::MARK_O);
    $board->setPosition(new Position(2, 1))->mark(Board::MARK_X);
    $board->setPosition(new RandomPosition($board->getSquareMap()))->mark(Board::MARK_O);
    print_r($board->getSquareMap()->getMap());
} catch (Exception $e) {
    echo $e->getMessage();
}