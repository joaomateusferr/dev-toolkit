<?php
    require_once("../start.php");
    $CurrentTool = basename(__FILE__, '.php');

    try {
        $DummyFile = new DummyFile();
        $Result = $DummyFile->createDummyFile('2MB', 'test', 'zip');
    } catch (Exception $E) {
        echo 'Exception: ',  $E->getMessage(), "\n";
    }

    var_dump($Result);

?>

<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="../../css/light.css">
	</head>
	<body>

        <?php
            require_once("../sidebar.php");
        ?>

        <div class="main">

            <div class="child">

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="DummyFile">
                    
                </form>
                
            </div>
            
        </div>

	</body>
	
</html>