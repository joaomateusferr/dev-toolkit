<?php
    require_once("../start.php");
    $CurrentTool = basename(__FILE__, '.php');

    try {

        if(isset($_POST['FileName']) && isset($_POST['FileExtension']) && isset($_POST['FileSize']) && isset($_POST['FileUnit']) && isset($_POST['FileMode'])){
            $Result = DummyFile::createDummyFile($_POST['FileName'], $_POST['FileExtension'], $_POST['FileSize'], $_POST['FileUnit'], $_POST['FileMode']);
        }

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
                            <select id="FileMode" name="FileMode">
                                <option value="FILE">File</option>
                                <option value="COMMAND" selected>Command</option>
                            </select>
                        </div>

                        <div class="col-sm-2">
                            <label for="FileDelete">Delete?</label>
                            <select id="FileDelete" name="FileDelete">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>

                        <div class="col-sm-2">
                            <label for="DeleteTime">In?</label>
                            <select id="DeleteTime" name="DeleteTime">
                                <option value="5">5 Minutes</option>
                                <option value="10">10 Minutes</option>
                                <option value="30">30 Minutes</option>
                                <option value="60">1 Hour</option>
                            </select>
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
                            <select id="FileUnit" name="FileUnit">
                                <option value="B">B</option>
                                <option value="KB">KB</option>
                                <option value="MB">MB</option>
                                <option value="GB">GB</option>
                                <option value="TB">TB</option>
                            </select>
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