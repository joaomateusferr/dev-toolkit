<?php
    require_once("../start.php");
    $CurrentTool = basename(__FILE__, '.php');

    $ClipBoard = new ClipBoard();
    $Lines = 0;

    if(isset($_POST['ClipBoardTextArea']))
        $ClipBoard->setClipBoard($_POST['ClipBoardTextArea']);

    $Content = $ClipBoard->getClipBoard();
    $Lines = substr_count($Content, "\n") + 1;

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


                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="ClipBoard">

                    <div class="row">

                        <div class="col-xs-12">
                            <textarea class="clip-board" name="ClipBoardTextArea" rows="<?php echo $Lines < 20 ? 20 : $Lines; ?>"><?php echo $Content; ?></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-12">
                            <button class="clip-board" type="submit" value="Submit">Update</button>
                        </div>
                    
                    </div>
                    
                </form>
            
            </div>

        </div>

	</body>
	
</html>