<?php

	include '../settings/configuration_file.php';

	$ProjectPath = str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__FILE__));
	$Options = new Options();

	if(!isset($_GET['tab']) || !in_array($_GET['tab'], $Options::POSSIBLE_TABS))
		header("Location: $ProjectPath/?tab=HOME");

	?>

	<!DOCTYPE html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/light.css">
			<script type="module" src="js/post.js"></script>
		</head>
		<body>

			<?php
			require_once("components/sidebar.php");
			?>

			<div class="main">
				<div class="child">
					<?php
						require_once("tools/clip-board.php");
					?>
				</div>
			</div>

		</body>
	
	</html>