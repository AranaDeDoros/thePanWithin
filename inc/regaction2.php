<?php 
$username = $_POST["username"];


 ?>

 <?php
	$titulopagina="Login";
	$cssfile ="register.css";
	include "../inc/header.php";
?>

<style type="text/css">
	.ui.aligned.center.aligned.grid, .ui.success.message .header, .ui.message div{
		margin: 1.66% 0% -1.66% 0%;
	}


</style>
<div class="ui horizontal divider">-</div>
<div  class="ui aligned center aligned grid">
<div class=row>
		<h2 class="ui image header">
		<div id="ft" class="content">
        <p>Well done, <?php echo $username ?></p>
		</div></h2></div>
<div class="row">  
	<img class="imagen" src="/img/smalllogo.jpg" alt="notfound" style="width: 200px;height: 200px;">

</div>
	<div class="row">	
		<div class="ui success message">
  <div class="header">
    Your info was successfully edited.
  <p style="text-align: center">You may now proceed.</p>

</div>
		</div>
	</div>


	<div  class="row" >	<div sid="msg" class="ui message">
<a href="/bibliotheque.php">Go to Music Library</a> </div></div>
	</div>

	<div class="ui horizontal divider">-</div>
 
    <?php include '../inc/footer.php' ?>