<?php
	$titulopagina="Register an account";
	$cssfile ="register.css";
	include "../inc/header.php";
?>

<style type="text/css">
	.ui.aligned.center.aligned.grid, .ui.success.message .header, .ui.message div{
		margin: 1.66% 0% -1.66% 0%;
	}

a{
	color: inherit;
}

#msj{
	text-align: center;
	width: 450px;
	padding-bottom:15px;

}
.ui.success.message{
	background-color:#ebf7ee;
}
</style>
<div id="steps" class="ui fluid ordered steps">
	<div class="active step">
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
	<div class="disabled step">
		<div class="content">
			<div class="title"><span>Browse</span></div>
			<div class="description"><span>Check music library</span></div>
		</div>
	</div>
</div>

<div class="ui horizontal divider">-</div>
<div  class="ui aligned center aligned grid">
<div class=row>
		<h2 class="ui image header">
		<div id="ft" class="content">
        <p>Welcome aboard, <?php echo $username ?></p>
		</div></h2></div>
<div class="row">  
	<img class="imagen" src="/img/smalllogo.jpg" alt="notfound" style="width: 200px;height: 200px;">

</div>
	<div class="row">	
		<div class="ui success message">
  <div class="header" id="msj">
    Your user registration was successful. <a href="/settings.php">You may now edit your settings</a> or
  <a href="/bibliotheque.php">Go to the Music Library.</a>

</div>
		</div>
	</div>


	<div  class="row" >	<div sid="msg" class="ui message">
<a href="/index.php">Return home</a> </div></div>
	</div>

	<div class="ui horizontal divider">-</div>
 
    <?php include '../inc/footer.php' ?>