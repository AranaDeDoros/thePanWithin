<?php
	session_start();
	$titulopagina="User settings";
	$cssfile ="register.css";
	include "../user//userheader.php";
include '../bd/conexion.php';


	$user = $_POST['username'];
	//echo "$user";
		$pass = $_POST['password'];
		//echo "$pass";
		$email = $_POST['email'];
		//echo "$email";
		$cell= $_POST['cellphone'];
		//echo "$cell";
$creditn=$_POST['cardnumber'];
    //echo "$creditn";
  $expd=$_POST['month'];
   //echo " mes $expd ";
  $expy=$_POST['yearz'];


	


if($_POST["username"]!=""&&$_POST["password"]!=""&&$_POST["email"]!=""&&$_POST["cellphone"]!=""&&$_POST["cardnumber"]!=""&&$_POST["month"]!=""&&$_POST["yearz"]!=""){
	$user = $_POST['username'];
		$pass = $_POST['password'];
		$email = $_POST['email'];
		$cell= $_POST['cellphone'];
    $idC =$user;

//update user set password='1233456', email='dasda@gmail.com', cellphone='2323232323' where nickname='angelino';
        $update= "update user set password='".$pass."', email='".$email."', cellphone='".$cell."' where nickname='".$user."'" or die(mysqli_error($link));
        $result=mysqli_query($cn,$update);


switch ($expd) {
case '01':
$expd="January";
$update2= "update creditcard set creditNumber='".$creditn."', expDate='".$expd."', expYear='".$expy."' where idCredit='".$user."'" or die(mysqli_error($link));
$result2=mysqli_query($cn,$update2);
//echo "igual a $expd";
break;
case '02':
$expd="February";
$update2= "update creditcard set creditNumber='".$creditn."', expDate='".$expd."', expYear='".$expy."' where idCredit='".$user."'" or die(mysqli_error($link));
$result2=mysqli_query($cn,$update2);
//echo "igual a $expd";
break;
case '03':
$expd="March";
$update2= "update creditcard set creditNumber='".$creditn."', expDate='".$expd."', expYear='".$expy."' where idCredit='".$user."'" or die(mysqli_error($link));
$result2=mysqli_query($cn,$update2);
//echo "igual a $expd";
break;
case '04':
$expd="April";
$update2= "update creditcard set creditNumber='".$creditn."', expDate='".$expd."', expYear='".$expy."' where idCredit='".$user."'" or die(mysqli_error($link));
$result2=mysqli_query($cn,$update2);
//echo "igual a $expd";
break;  
case '05':
$expd="May";
$update2= "update creditcard set creditNumber='".$creditn."', expDate='".$expd."', expYear='".$expy."' where idCredit='".$user."'" or die(mysqli_error($link));
$result2=mysqli_query($cn,$update2);
//echo "igual a $expd";
break;
case '06':
$expd="June";
$update2= "update creditcard set creditNumber='".$creditn."', expDate='".$expd."', expYear='".$expy."' where idCredit='".$user."'" or die(mysqli_error($link));
$result2=mysqli_query($cn,$update2);
//echo "igual a $expd";
break;
case '07':
$expd="July";
$update2= "update creditcard set creditNumber='".$creditn."', expDate='".$expd."', expYear='".$expy."' where idCredit='".$user."'" or die(mysqli_error($link));
$result2=mysqli_query($cn,$update2);
//echo "igual a $expd";
break;
case '08':
$expd="August";
$update2= "update creditcard set creditNumber='".$creditn."', expDate='".$expd."', expYear='".$expy."' where idCredit='".$user."'" or die(mysqli_error($link));
$result2=mysqli_query($cn,$update2);
//echo "igual a $expd";
break;  
case '09':
$expd="September";
$update2= "update creditcard set creditNumber='".$creditn."', expDate='".$expd."', expYear='".$expy."' where idCredit='".$user."'" or die(mysqli_error($link));
$result2=mysqli_query($cn,$update2);
//echo "igual a $expd";
break;
case '10':
$expd="October";
$update2= "update creditcard set creditNumber='".$creditn."', expDate='".$expd."', expYear='".$expy."' where idCredit='".$user."'" or die(mysqli_error($link));
$result2=mysqli_query($cn,$update2);
//echo "igual a $expd";
break;
case '11':
$expd="November";
$update2= "update creditcard set creditNumber='".$creditn."', expDate='".$expd."', expYear='".$expy."' where idCredit='".$user."'" or die(mysqli_error($link));
$result2=mysqli_query($cn,$update2);
//echo "igual a $expd";
break;
case '12':
$expd="December";
$update2= "update creditcard set creditNumber='".$creditn."', expDate='".$expd."', expYear='".$expy."' where idCredit='".$user."'" or die(mysqli_error($link));
$result2=mysqli_query($cn,$update2);
//echo "igual a $expd";
break;  
  
}
 


       
 
 

mysqli_close($cn);

}
else{
	echo " aun no click....";
}?>




<div style="margin:15% 0 15% 0;">

</div>
<style type="text/css">
.ui.modal{
   font-size: 20px;
	}
</style>
<div class="ui modal">
  <div class="header">
  <span>SUCCESS</span>
  </div>
  <div class="image content">
    <div class="ui medium image">
    <i class="checkmark sign icon"></i>
    </div>
    <div class="description">
      <div class="ui header">Settings updated.</div>
      <p>Info updated.</p>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button" onclick= window.location.href="../user/index.php";>
      Back to Index
    </div>
    <div class="ui positive right labeled icon button" style="background-color: red" onclick= window.location.href="../user/bibliotheque.php";>
      Go to Music Library.
      <i class="checkmark icon"></i>
    </div>
  </div>

</div> 
 <script type="text/javascript">$('.ui.modal').modal({closable:false}).modal('show');

  </script>

<div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>




<?php
	include "../inc/footer.php";