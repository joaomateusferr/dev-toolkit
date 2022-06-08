<?php

class Options {
    
    private const OPTIONS_FILE_PATH = '../config/options.json';
    private const DEFAULT_OPTIONS = [
        'Theme' => 'DARK',
        'UsefulLinks' => [],
        'ClipBoard' => '',
    ];
    public const POSSIBLE_TABS = [
        'HOME',
        'CLIP_BOARD',
        'USEFUL_LINKS',
    ];

    public $Theme;
    public $UsefulLinks;
    public $ClipBoard;

    function __construct() {

        if(file_exists(self::OPTIONS_FILE_PATH)){
            
            $Options = json_decode(file_get_contents(self::OPTIONS_FILE_PATH), true);

            foreach ($Options as $Key => $Option){
                $this->$Key = $Option;
            }

        } else {

            foreach (self::DEFAULT_OPTIONS as $Key => $Option){
                $this->$Key = $Option;
            }

            file_put_contents(self::OPTIONS_FILE_PATH, json_encode(self::DEFAULT_OPTIONS, JSON_PRETTY_PRINT)); 
        }
    
    }
    
}