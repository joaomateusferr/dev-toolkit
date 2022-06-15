<?php

class DummyFile {

    private const DUMMY_FILE_FILE_PATH = '/dev-toolkit/files/';

    function createDummyFile($Size, $Name, $Extension) {

        $FilePath = $_SERVER['DOCUMENT_ROOT'].self::DUMMY_FILE_FILE_PATH;
        $FileName = "$Name.$Extension";
        $ExportPath = $FilePath.$FileName;

        $Unit = ['B', 'KB', 'MB', 'GB', 'TB'];
            
        $FileSize = 0;
        $Count = 1;

        $Size = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $Size);    
            
        $Size[1] = strtoupper($Size[1]);
            
        if(!is_numeric($Size[0]) || !in_array($Size[1], $Unit)){

            echo "Invalid size!\nUse the pattern SizeUnit (5MB)\n";

        } else {

            switch ($Size[1]) {

                case 'B':
                    $FileSize = $Size[0];
                    break;
                case 'KB':
                    $FileSize = '1K';
                    $Count = $Size[0];
                    break;
                case 'MB':
                    $FileSize = '1M';
                    $Count = $Size[0];
                    break;
                case 'GB':
                    $FileSize = '1G';
                    $Count = $Size[0];
                    break;
                case 'TB':
                    $FileSize = '1G';
                    $Count = 1024*$Size[0];
                    break;
            }

            $Result['ResultCode'] = 0;
            $Result['Output'] = '';

            $Command = "dd if=/dev/urandom of=$ExportPath bs=$FileSize count=$Count";
                
            exec("$Command 2>&1", $Result['Output'], $Result['ResultCode']);
                
            return $Result;

        }

    }

}