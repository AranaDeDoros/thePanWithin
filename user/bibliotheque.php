<?php

	session_start();

		if($_SESSION['user']==''){
	    	header("Location: ../index.php");		
	}	


	$titulopagina="Music Library";
	$cssfile ="library.css";
	include "../user/userheader.php";


?>
<?php 
include "../inc/library.php";
?>
	<?php
		include "../user/footer.php";