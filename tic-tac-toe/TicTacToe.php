<?php

final class TicTacToe
{
    private Board $board;
    
    public function __construct() 
    {
        $this->board = new Board(3, 3);
    }
    
    public function getBoard(): Board
    {
        return $this->board;
    }
}
