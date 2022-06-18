<?php
    require_once("../start.php");
    $CurrentTool = basename(__FILE__, '.php');

    $ClipBoard = new ClipBoard();

    if(!empty($_POST['ClipBoardTextArea']))
        $ClipBoard->setClipBoard($_POST['ClipBoardTextArea']);
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

            <div class="container child">


                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="ClipBoard">

                    <div class="col-xs-12">
                        <textarea class="clip-board" name="ClipBoardTextArea" rows="20"><?php echo $ClipBoard->getClipBoard(); ?></textarea>
                    </div>

                    <div class="col-xs-12">
                        <button class="clip-board" type="submit" value="Submit">Update</button>
                    </div>
                    
                </form>
            
            </div>

        </div>

	</body>
	
</html>