<div class="sidebar">
  	<a <?php echo $CurrentTool == 'home' ? 'class="active"' : '';?> href="<?php echo "/components/tools/home.php" ?>">Home</a>
  	<a <?php echo $CurrentTool == 'clip-board' ? 'class="active"' : '';?> href="<?php echo "/components/tools/clip-board.php" ?>">Clip Board</a>
	<a <?php echo $CurrentTool == 'dummy-file' ? 'class="active"' : '';?> href="<?php echo "/components/tools/dummy-file.php" ?>">Dummy File</a>
</div>