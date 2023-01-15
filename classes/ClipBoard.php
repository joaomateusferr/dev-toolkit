<?php

class ClipBoard {

    private const CLIP_BOARD_FILE_PATH = '/config/clip-board.txt';
    private $Content = '';

    function __construct() {

        $ClipBoardPath = Constants::getProjectPath().self::CLIP_BOARD_FILE_PATH;

        if(file_exists($ClipBoardPath))
            $this->Content = file_get_contents($ClipBoardPath);
        else 
            file_put_contents($ClipBoardPath, $this->Content); 
        
    }

    function setClipBoard($Content) {
        
        $ClipBoardPath = Constants::getProjectPath().self::CLIP_BOARD_FILE_PATH;
        $this->Content = $Content;
        file_put_contents($ClipBoardPath, $Content);

    }

    function getClipBoard() {

        return $this->Content;

    }
}