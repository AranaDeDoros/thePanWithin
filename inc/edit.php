<?php 


	session_start();

		if($_SESSION['user']==''){
	    	header("Location: ../index.php");		
	}	
	
	$titulopagina="Music Library";
	$cssfile ="library.css";
	include "../user/userheader.php";
?>

<div id="steps" class="ui fluid ordered steps">
	<div class="disabled step">
		<div class="content">
			<div class="title"><span>Register</span></div>
			<div class="description"><span>Fill out the register form</span></div>
		</div>
	</div>
	<div class="disabled step">
		<div class="content">
			<div class="title"><span>Settings</span></div>
			<div class="description"><span>Edit your settings (Optional)</span></div>
		</div>
	</div>
	<div class="active step">
		<div class="content">
			<div class="title"><span>Browse</span></div>
			<div class="description"><span>Check music library</span></div>
		</div>
	</div>
</div>
<?php 
include "../inc/library.php";
?>
    <?php include '../user/footer.php' ?>