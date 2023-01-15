<?php

class DummyFile {

    private const DUMMY_FILE_FILE_PATH = '/dummy-files/';
    private const FILE_UNITS = ['B', 'KB', 'MB', 'GB', 'TB'];
    private const DUMMY_FILE_MODES = ['FILE', 'COMMAND'];

    public static function createDummyFile($Name, $Extension, $Size, $Unit, $Mode) {

        $FilePath = Constants::getProjectPath().self::DUMMY_FILE_FILE_PATH;
        $FileName = "$Name.$Extension";
        $ExportPath = $FilePath.$FileName;
            
        $FileSize = 0;
        $Count = 1;
            
        $Unit = strtoupper($Unit);
            
        if(!is_numeric($Size) || !in_array($Unit, self::FILE_UNITS)){

            throw new Exception(Exceptions::DUMMY_FILE_INVALID_SIZE);

        } elseif(!in_array($Mode, self::DUMMY_FILE_MODES)){

            throw new Exception(Exceptions::DUMMY_FILE_INVALID_MODE);

        } else {

            switch ($Unit) {

                case 'B':
                    $FileSize = $Size;
                    break;

                case 'KB':
                    $FileSize = '1K';
                    $Count = $Size;
                    break;

                case 'MB':
                    $FileSize = '1M';
                    $Count = $Size;
                    break;

                case 'GB':
                    $FileSize = '1G';
                    $Count = $Size;
                    break;

                case 'TB':
                    $FileSize = '1G';
                    $Count = 1024*$Size;
                    break;
            }

            $Command = "dd if=/dev/urandom of=$ExportPath bs=$FileSize count=$Count";

            if($Mode == 'COMMAND'){
                $Result = $Command;
            } elseif($Mode == 'FILE'){
                $Result['ResultCode'] = 0;
                $Result['Output'] = '';
                exec("$Command 2>&1", $Result['Output'], $Result['ResultCode']);
            }

            return $Result;
        }

    }

}