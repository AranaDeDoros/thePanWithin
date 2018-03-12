<?php /////////////////////credit card load
 error_reporting(0); 
session_start();

$us=$_SESSION['user'];
//echo "--------$us";
$com="select creditNumber, expDate, expYear from creditcard where idCredit='".$us."' ";
$res=mysqli_query($cn,$com);


$fila =mysqli_fetch_row($res);
if(!$res){
   echo 'Could not run query: ' . mysql_error();
    exit; 
}

$numero=$fila[0];
$fecha=$fila[1];
$anio=$fila[2];

//echo "$numero.$fecha.$anio";



mysqli_free_result($result);
mysqli_close($cn);
?>