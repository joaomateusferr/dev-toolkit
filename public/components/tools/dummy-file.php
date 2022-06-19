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

            <div class="container">

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="DummyFile">

                    <div class="row">
                        
                        <div class="col-sm-2">
                            <label for="FileMode">Mode</label>
                            <input type="text" id="FileMode" name="FileMode">
                        </div>

                        <div class="col-sm-2">
                            <label for="FileDelete">Delete?</label>
                            <input type="text" id="FileDelete" name="FileDelete">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6">
                            <label for="FileName">Name</label>
                            <input type="text" id="FileName" name="FileName">
                        </div>

                        <div class="col-sm-2">
                            <label for="FileExtension">Extension</label>
                            <input type="text" id="FileExtension" name="FileExtension">
                        </div>

                        <div class="col-sm-2">
                            <label for="FileSize">Size</label>
                            <input type="text" id="FileSize" name="FileSize">
                        </div>

                        <div class="col-sm-2">
                            <label for="FileUnit">Unit</label>
                            <input type="text" id="FileUnit" name="FileUnit">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-12">
                            <label for="FileCommand">Command</label>
                            <input type="text" id="FileCommand" name="FileCommand">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-12">
                            <button type="submit" value="Submit">Run</button>
                        </div>

                    </div>
                    
                </form>
                
            </div>
            
        </div>

	</body>
	
</html>