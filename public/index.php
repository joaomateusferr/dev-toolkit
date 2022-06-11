<?php
	$ProjectPublicRoot = str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__FILE__));
	header("Location: $ProjectPublicRoot/components/tools/home.php");
?>