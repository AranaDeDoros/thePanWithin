<?php
 error_reporting(0); 
	$titulopagina="Login";
	$cssfile ="register.css";
	include "/inc/header.php";
	
	session_start();

	if($_SESSION['user']!=''){
	    	header("Location: ../user/index.php");		
	}	


	
?>
<script type="text/javascript" src="../js/loginform.js"></script>

<div  class="ui middle aligned center aligned grid">
	<div class="column">
		<h2 class="ui image header">
		<img  src="/img/smalllogob.png" id="small" class="image">
		<div id="ft" class="content">
        Login
		</div>
		</h2>
		<form  class="ui large form" action="/inc/logaction.php" method="POST" onsubmit="alert("ff");">
			<div class="ui inverted stacked segment">
				<div class="field">
					<label style="font-size: 16px;font-weight: normal">Caps/Lowcase, Numbers, -, _ allowed. 6 min, 12 at max.</label>
					<div class="ui left icon input">
						<i class="user icon"></i>
						<input type="text" name="username" placeholder="Username"  title="Username">
					</div>
				</div>
				
				<div class="field">
					<label style="font-size: 16px;font-weight: normal">Enter password. (6 characters min, 12 at max).</label>
					<div class="ui left icon input">
						<i class="privacy icon"></i>
						<input type="password" name="password" placeholder="Password" title="Password" >
					</div>
				</div>


				<button  id="sigin" class="ui fluid large teal submit button" name="login" value="login">Login</button>

			</div>
			<div class="ui error message">
				<span>Wrong username or password.</span>
			</div>
		</form>
		<div id="msg" class="ui message">
			Not an user yet? <a href="register.php">Sign-up</a> </div>
		</div>
	</div>
	<br>
	<br>
<script type="text/javascript">
    

</script>
	<?php
		include "/inc/footer.php";?>