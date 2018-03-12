<?php
	session_start();
$titulopagina="Register an account";
$cssfile ="register.css";
include "../user/userheader.php";
include '../bd/conexion.php';

$username = $_POST["username"];
echo "\n$username\n";
$pass=$_POST["password"];
echo "$pass\n";
$email = $_POST["email"];
echo "$email\n";
$cellphone=$_POST["cellphone"];
echo "$cellphone\n";
$cardnumber=$_POST["cardnumber"];
echo "$cardnumber\n";
$comb =$_POST["mes"];
echo "$comb\n";
$expy =$_POST["yearz"];
echo "$expy\n";
$idC =$username;
echo "$idC";

		if($_POST["username"]!=""&&$_POST["password"]!=""&&$_POST["email"]!=""&&$_POST["cellphone"]!=""&&$_POST["cardnumber"]!=""&&$_POST["mes"]!=""&&$_POST["yearz"]!=""){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$email = $_POST['email'];
		$cell= $_POST['cellphone'];
		$cardnumber= $_POST['cardnumber'];
        $idC =$username;

        $check= "select * from user where nickname='$username'";
        $result=mysqli_query($cn,$check);
       $num_row = mysqli_num_rows($result);

        $check2= " select * from creditcard where creditNumber= '$cardnumber'";
        $resultc= mysqli_query($cn,$check2);
        $num_row2 = mysqli_num_rows($resultc);

         $check3= " select * from user where email= '$email'";
        $resultc2= mysqli_query($cn,$check3);
        $num_row3 = mysqli_num_rows($resultc2);

         $check4= " select * from user where cellphone= '$cellphone'";
        $resultc3= mysqli_query($cn,$check4);
        $num_row4 = mysqli_num_rows($resultc3);

          $check5= " select * from creditCard where creditNumber= '$cardnumber'";
        $resultc4= mysqli_query($cn,$check5);
        $num_row5 = mysqli_num_rows($resultc4);

      

 


if($num_row>0 | $num_row2>0 | $num_row3>0 | $num_row4>0 | $num_row5>0 )
{
	       
echo "<script>window.location='aviso.php'</script>"; // Si el registro existe, salta el modal
} 
else
{


	$insert = "insert into user values('$user','$pass','$email','$cellphone')" ;
		$result = mysqli_query($cn,$insert);
			$insert2 = "insert into creditcard values('$cardnumber','$comb', '$expy','$idC')" ;
		$result2 = mysqli_query($cn,$insert2);

  $createsales= "create table ".$username."_sales  (idSale int(11) primary key not null auto_increment , albumN varchar(30) not null,  artistN varchar(30) not null , nickname varchar(30) not null, saleDate datetime not null default current_timestamp not null,FOREIGN KEY(nickname) REFERENCES user(nickname))";
        $sales=mysqli_query($cn,$createsales);     




///ya existe el registro
$select = "select nickname, password, email, cellphone from user where nickname='".$user."' and password='".$pass."' ";
$result=mysqli_query($cn,$select);
$row=mysqli_fetch_row($result);
mysqli_free_result($result);

if($user == $row[0] and $pass == $row[1] and $email==$row[2] and $cellphone==$row[3]) {
$_SESSION['user']     = $row[0];
//$_SESSION['userName'] = $row[2].', '.$row[3];
}


mysqli_close($cn);
echo("AGREGADO");
}

		
	

	}

	

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
					Your user registration was successful. <a href="../user/settings2.php">You may now edit your settings</a> or
					<a href="../user/bibliotheque.php">Go to the Music Library.</a>
				</div>
			</div>
		</div>
		<div  class="row" >	<div sid="msg" class="ui message">
			<a href="../user/index.php">Return home</a> </div></div>
		</div>
		<div class="ui horizontal divider">-</div>
		<br>



		<style type="text/css">
.ui.modal{
   font-size: 20px;
	}
</style>

		<?php include '../user/footer.php' ?>