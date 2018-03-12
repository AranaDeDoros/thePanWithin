<?php

	session_start();

	if($_SESSION['user']==''){
	    	header("Location: ../index.php");		
	}	


	$titulopagina="Welcome to The Pan Within";
	$cssfile ="register.css";
	include "../user/userheader.php";



?>

<style type="text/css">
	.ui.segment>p::first-letter{
		font-size:80px;

	}
	.ui.segment p{
		font-size: 30px;
	}
</style>
<div class="ui segment" style="margin-bottom:20%;">
<p>This website was created to spread the love for less known music, all around the world, and to pass the semester, of course.</p>
</div>

<?php
	include "../user/footer.php";