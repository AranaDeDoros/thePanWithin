<?php

session_start();
									
	$titulopagina="Login";
	$cssfile ="register.css";
	include "../user/userheader.php";
include '../bd/conexion.php';

	$user = $_POST["username"];

if($_POST["username"]!=""&&$_POST["password"]!=""){
	$user = $_POST["username"];
		$pass = $_POST['password'];
	$select = "select nickname, password, email, cellphone from user where nickname='".$user."' and password='".$pass."'";
$result=mysqli_query($cn,$select);

	if(mysqli_num_rows($result)==0){
echo "<script>window.location='avisol.php'</script>"; // Si el registro existe, salta el modal

}else{
echo "\nexistte";
$row=mysqli_fetch_row($result);
mysqli_free_result($result);
mysqli_close($cn);


if($user == $row[0] and $pass == $row[1]) {
$_SESSION['user']     = $row[0];

echo "\nWelcome";
} 
}

}

	$var=$_SESSION['user'];
	

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
			<p>Welcome back, <?php echo $user?>!</p>
		</div></h2></div>
		<div class="row">
			<img class="imagen" src="/img/smalllogo.jpg" alt="notfound" style="width: 200px;height: 200px;">
		</div>
		<div class="row">
			<div class="ui success message">
				<div class="header">
					Glad to have you back.
					<p>You may now proceed at your leisure.</p>
				</div>
			</div>
		</div>
		<div  class="row" >	<div sid="msg" class="ui message">
			<a href="../user/bibliotheque.php">Go to Music Library</a> </div></div>
		</div>
		<div class="ui horizontal divider">-</div>
		
		<?php include '../user/footer.php' ?>