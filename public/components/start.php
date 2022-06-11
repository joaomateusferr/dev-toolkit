<?php
    
    $ProjectPath = $_SERVER['DOCUMENT_ROOT'].'/dev-toolkit';
    $ProjectPublicPath = $ProjectPath.'/public';
    $ProjectRoot = '/dev-toolkit';
    $ProjectPublicRoot = '/dev-toolkit/public';
    $CurrentTool = '';
        
    include "$ProjectPath/settings/configuration_file.php";
    
    $Options = new Options();
?>