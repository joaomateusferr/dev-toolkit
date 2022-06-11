<?php
    require_once("../start.php");
    $CurrentTool = basename(__FILE__, '.php');

    $ClipBoard = new ClipBoard();

    if(!empty($_POST['ClipBoardTextArea']))
        $ClipBoard->setClipBoard($_POST['ClipBoardTextArea']);
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

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="ClipBoard">
                    <textarea class="clip-board" name="ClipBoardTextArea" rows="20"><?php echo $ClipBoard->getClipBoard(); ?></textarea>
                    <button class="clip-board" type="submit" value="Submit">Update</button>
                </form>
                
            </div>
            
        </div>

	</body>
	
</html>