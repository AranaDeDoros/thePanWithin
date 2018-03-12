<?php
 error_reporting(0); 
	$titulopagina="Sign-up";
	$cssfile ="register.css";
	include "/inc/header.php";
	session_start();

		if($_SESSION['user']!=''){
	    	header("Location: ../user/index.php");		
	}	

?>
<script type="text/javascript" src="../js/form.js"></script>
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
<div  class="ui middle aligned center aligned grid">
	<div class="column">
		<h2 class="ui image header">
		<img  src="/img/smalllogob.png" id="small" class="image">
		<div id="ft" class="content">
			Register an account
		</div>
		</h2>
		<form  class="ui large form" action="/inc/regaction.php" method="POST">
			<div class="ui inverted stacked segment">
				<div class="field">
					<label style="font-size: 16px;font-weight: normal">Caps/Lowcase, Numbers, -, _ allowed. (6 characters min, 12 at max).</label>
					<div class="ui left icon input">
						<i class="user icon"></i>
						<input type="text" name="username" placeholder="Username"  title="Username">
					</div>
				</div>
				
				<div class="field">
					<label style="font-size: 16px;font-weight: normal">Enter your e-mail.</label>
					<div class="ui left icon input">
						<i class="mail icon"></i>
						<input type="text" name="email" placeholder="E-mail address" title="E-mail">
					</div>
				</div>
				<div class="field">
					<label style="font-size: 16px;font-weight: normal">And now enter a password. (6 characters min, 12 at max).</label>
					<div class="ui left icon input">
						<i class="privacy icon"></i>
						<input type="password" name="password" placeholder="Password" title="Password">
					</div>
				</div>
				<div class="field">
					<label style="font-size: 16px;font-weight: normal">Confirm password</label>
					<div class="ui left icon input">
						<i class="privacy icon"></i>
						<input type="password" name="password2" placeholder="Confirm Password" title="Confirm Password">
					</div>
				</div>
				<div class="field">
					<label style="font-size: 16px;font-weight: normal">A cellphone number (10 digits long)</label>
					<div class="ui left icon input">
						<i class="hashtag icon"></i>
						<input type="text" name="cellphone" placeholder="Cellphone number" title="Cellphone number" >
					</div>
				</div>
				<div class="field">
					<label style="font-size: 16px;font-weight: normal">Edit card number (XXXX-XXXX-XXXX)</label>
					<div class="ui left icon input">
						<i class="payment icon"></i>
						<input type="text" name="cardnumber" placeholder="Card Number" title="Card Number">
					</div>
				</div>
				<div class="two inline fields">
					<label style="font-size: 16px;font-weight: normal;color:inherit">Expiration Date</label>
					<div class="ui selection dropdown" style="margin-left: -10px;" >
						<input type="hidden" name="mes" required>
						<i class="dropdown icon"></i>
						<div class="default text">Month</div>
						<div class="menu">
							<div class="item" data-value="January">January</div>
							<div class="item" data-value="February">February</div>
							<div class="item" data-value="March">March</div>
							<div class="item" data-value="April">April</div>
							<div class="item" data-value="May">May</div>
							<div class="item" data-value="June">June</div>
							<div class="item" data-value="July">July</div>
							<div class="item" data-value="August">August</div>
							<div class="item" data-value="September">September</div>
							<div class="item" data-value="October">October</div>
							<div class="item" data-value="November">November</div>
							<div class="item" data-value="December">December</div>
						</div>
					</div>
					<div class="six wide field" class="fecha"  style="margin-left:10px; ">
						<div class="ui left icon input">
							<i class="calendar icon"></i>
							<input  type="text" name="yearz" placeholder="Year" title="Year">
						</div>
					</div>
				</div>
				<button  id="sigin" class="ui fluid large teal submit button" name="register" value="register">Register</button>
			</div>
			<div class="ui success message">
				<span>Register Successful!</span>
			</div>
			<div class="ui error message">
				<span>Something went wrong. Try again later.</span>
			</div>
			<div class="ui warning message">
				<span>Be careful.</span>
			</div>
		</form>
		<div id="msg" class="ui message">
			Got an account already? <a href="login.php">Login</a> </div>
		</div>
	</div>
	
	<script type="text/javascript">$('.ui.dropdown')
	.dropdown();</script>
	<br>
	<?php
		include "/inc/footer.php";