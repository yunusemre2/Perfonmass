<?php
	ob_start();
	session_start();
	session_destroy();
	
	include ("index.php");
	ob_end_flush();
	
	?>
