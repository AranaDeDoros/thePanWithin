<?php 
	session_start();
    unset($_SESSION['user']);	unset($_SESSION['userName']);	
	session_destroy();
	header("Location: ../index.php");	
 ?>