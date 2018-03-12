<?php
	session_start();


	$titulopagina="User settings";
	$cssfile ="register.css";
	include "userheader.php";
include '../bd/conexion.php';

$r=$_SESSION['user'];
$c=$r;
echo "$c";

 $select= "select nickname, password, email, cellphone from user where nickname='".$r."'";
 $result=mysqli_query($cn,$select);
$num_row = mysqli_num_rows($result);



$select2="select creditNumber, expDate, expYear from creditcard where idCredit='".$c."'"; 
$result2=mysqli_query($cn,$select2);
$num_row2=mysqli_num_rows($result);

$msg="EXITO";



if($num_row>0){
while ($row=$result->fetch_assoc()) {
	$nick=$row["nickname"];
	$pass=$row["password"];
	$mail=$row["email"];
	$cell=$row["cellphone"];
	echo "nick:".$row["nickname"]. " -pass:".$row["password"]." email:".$row["email"]." cellphone:".$row["cellphone"];
}
}

if($num_row2>0){
while ($row2=$result2->fetch_assoc()) {
	$creditn=$row2["creditNumber"];
	$expd=$row2["expDate"];
	$expy=$row2["expYear"];
     echo " numbah:".$row2["creditNumber"]. " expDate:".$row2["expDate"]. " expY:".$row2["expYear"];
}
}


else{
	echo " aun no click....";
}

	if($_SESSION['user']==''){
	    	header("Location: ../index.php");		
	}	

mysqli_free_result($result);
mysqli_close($cn);

?>
<script type="text/javascript" src="../js/form.js"></script>
<div  class="ui middle aligned center aligned grid">
	<div class="column">
		<h2 class="ui image header">
		<img  src="/img/smalllogob.png" id="small" class="image">
		<div id="ft" class="content">
			User Settings
		</div>
		</h2>
		<form  class="ui large form" action="../inc/update.php" method="POST" >
			<div class="ui inverted stacked segment">
				<div class="field">
					<label style="font-size: 16px;font-weight: normal">Change Username. Caps/Lowcase, Numbers, -, _ allowed.</label>
					<div class="ui left icon input">
						<i class="user icon"></i>
						<input type="text" name="username" placeholder="Username" required title="Username" readonly value=<?php echo $nick ?>>
					</div>
				</div>
				<div class="field">
					<label style="font-size: 16px;font-weight: normal">Change e-mail</label>
					<div class="ui left icon input">
						<i class="mail icon"></i>
						<input type="text" name="email" placeholder="E-mail address" title="E-mail" value=<?php echo $mail ?>>
					</div>
				</div>
				
				<div class="field">
					<label style="font-size: 16px;font-weight: normal">Change password. 6 digits</label>
					<div class="ui left icon input">
						<i class="privacy icon"></i>
						<input type="password" name="password" placeholder="Password" title="Password" value=<?php echo $pass ?>>
					</div>
				</div>
				<div class="field">
					<label style="font-size: 16px;font-weight: normal">Edit cellphone number, 10 numbers.</label>
					<div class="ui left icon input">
						<i class="hashtag icon"></i>
						<input type="text" name="cellphone" placeholder="Cellphone number" title="Cellphone number" value=<?php echo $cell ?>>
					</div>
				</div>
				<div class="field">
					<label style="font-size: 16px;font-weight: normal">Edit card number.</label>
					<div class="ui left icon input">
						<i class="payment icon"></i>
						<input type="text" name="cardnumber" placeholder="Card Number" title="Card Number" value=<?php echo $creditn?>>
					</div>
				</div>
				<div class="two inline fields">
					<label style="font-size: 16px;font-weight: normal;color:inherit">Expiration Date</label>
					<div class="ui selection dropdown" style="margin-left: -10px;">
						<input type="hidden" name="month" value=<?php echo $expd?>>
						<i class="dropdown icon"></i>
						<div class="default text">Month</div>
						<div class="menu">
							<div class="item" data-value="01">January</div>
							<div class="item" data-value="02">February</div>
							<div class="item" data-value="03">March</div>
							<div class="item" data-value="04">April</div>
							<div class="item" data-value="05">May</div>
							<div class="item" data-value="06">June</div>
							<div class="item" data-value="07">July</div>
							<div class="item" data-value="08">August</div>
							<div class="item" data-value="09">September</div>
							<div class="item" data-value="10">October</div>
							<div class="item" data-value="11">November</div>
							<div class="item" data-value="12">December</div>
						</div>
					</div>
					<div class="six wide field" class="fecha"  style="margin-left:10px; ">
						<div class="ui left icon input">
							<i class="calendar icon"></i>
							<input  type="text" name="yearz" placeholder="Year" title="Year" value=<?php echo $expy?>>
						</div>
					</div>
				</div>
				<button  id="sigin" class="ui fluid large teal submit button" name="edit" value="edit" >Save Changes</button>
			</div>
			<div class="ui error message">
				<span>Wrong username or password.</span>
			</div>
			<div class="ui success message">
				<span>Saves changed</span>
			</div>		<div class="row">
			<div class="ui success message">
			</div>
		</div>
	</form>
	<div class="header" id="msj">
		<a href="../user/bibliotheque.php"> Go to the Music Library</a>
	</div>
	<div id="msg" class="ui message">
		<a href="../user/index.php">Return home</a> </div>
		
	</div>
</div>
<script type="text/javascript">$('.ui.dropdown')
.dropdown();</script>
<?php
	include "../user/footer.php";