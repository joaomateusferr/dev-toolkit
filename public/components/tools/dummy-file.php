<?php
    require_once("../start.php");
    $CurrentTool = basename(__FILE__, '.php');

    try {
        //$DummyFile = new DummyFile();
        //$Result = $DummyFile->createDummyFile('2MB', 'test', 'zip');
    } catch (Exception $E) {
        echo 'Exception: ',  $E->getMessage(), "\n";
    }

?>

<!DOCTYPE html>

<html>

    <?php
        require_once("../head.php");
    ?>

	<body>

        <?php
            require_once("../sidebar.php");
        ?>

        <div class="main">

            <div class="container center">

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="DummyFile">
                    
                </form>
                
            </div>
            
        </div>

	</body>
	
</html>