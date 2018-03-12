<?php 


session_start();

	$titulopagina="Buy";
	$cssfile ="register.css";
	include "../user/userheader.php";
  include '../bd/conexion.php';


$idDisco=$_POST['idDisco'];




$select= "select albumN, artistN, anio,stock,downloads from disco where idDisco='".$idDisco."'";
 $result=mysqli_query($cn,$select);



$row=mysqli_fetch_row($result);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$alb=$row[0];
$art=$row[1];
$an=$row[2];
$stock=$row[3];
$downloads=$row[4];
?>

<style type="text/css">
.ui.modal{
   font-size: 20px;
	}
</style>
<div class="ui modal" id="ext">
  
  <div class="header">
  <span> Purchase</span>
  </div>
  <div class="image content">
    <div class="ui medium image">
    <i class="sound icon"></i>
    </div>
    <div class="description">
      <div class="ui header">Transaction Complete!</div>
      <p>Congratulations. <strong><?php echo "$alb by $art" ?></strong> is now yours.</p>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button" onclick= window.location.href="../user/index.php";>
      Back to Index
    </div>
    <div class="ui positive right labeled icon button" style="background-color: red" onclick= window.location.href="../user/bibliotheque.php";>
   Accept
      <i class="checkmark icon"></i>
    </div>
  </div>

</div> 

<div class="ui modal" id="empty">
  
  <div class="header">
  <span> ERROR!</span>
  </div>
  <div class="image content">
    <div class="ui medium image">
    <i class="warning icon" style="margin-left: 25%"></i>
    </div>
    <div class="description">
      <div class="ui header">An error has ocurred!</div>
      <p><strong><?php echo "$alb by $art" ?></strong> is out of stock.</p>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button" onclick= window.location.href="../user/index.php";>
      Back to Index
    </div>
    <div class="ui positive right labeled icon button" style="background-color: red" onclick= window.location.href="../user/bibliotheque.php";>
   Accept
      <i class="checkmark icon"></i>
    </div>
  </div>

</div> 

<div class="ui modal" id="bought">
  
  <div class="header">
  <span> ERROR!</span>
  </div>
  <div class="image content">
    <div class="ui medium image">
    <i class="warning icon" style="margin-left: 25%"></i>
    </div>
    <div class="description">
      <div class="ui header">An error has ocurred!</div>
      <p><strong>You have already bought <?php echo "$alb by $art" ?>!</strong></p>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button" onclick= window.location.href="../user/index.php";>
      Back to Index
    </div>
    <div class="ui positive right labeled icon button" style="background-color: red" onclick= window.location.href="../user/bibliotheque.php";>
   Accept
      <i class="checkmark icon"></i>
    </div>
  </div>

</div> 



<?php 


if($_POST['yearz']!="" && $_POST['code']!="" && $_POST['idDisco']!="" && $_POST['month']!=""){
   $check= "select stock from disco where idDisco='".$idDisco."' ";
        $result=mysqli_query($cn,$check);
      $row=mysqli_fetch_row($result);
      $qt=$row[0];
      //echo $qt;


$varu=$_SESSION['user'];
////////////////SI YA LO COMPRÉ
$check= "select albumN, artistN from ".$varu."_sales where albumN='".$alb."' and artistN= '".$art."'     ";
        $result=mysqli_query($cn,$check);
       $num_row = mysqli_num_rows($result);

if($num_row>0){
 echo "<script>


 $('#bought').modal({closable:false}).modal('show');
</script>";
}
else if($num_row==0 && $qt>0){ ///////HAY EN EXISTENCIA Y NO HE COMPRADO
 $update= " update disco set stock=".$stock."-1, downloads=".$downloads."+1 where idDisco='".$idDisco."' " or die(mysqli_error($link));
$result=mysqli_query($cn,$update);

/////////////INSERTA EN VENTAS USUARIO
$varu=$_SESSION['user'];

 $saleinsert= "insert into ".$varu."_sales values(null,'$alb','$art','$varu',CURRENT_TIMESTAMP) ";
        $results=mysqli_query($cn,$saleinsert);




 echo "<script>


 $('#ext').modal({closable:false}).modal('show');
</script>";

}
else{   //////NO HAY

  echo "<script>


 $('#empty').modal({closable:false}).modal('show');
</script>";
}

}


// if($_SESSION['user']!=''){
//         header("Location: ../user/index.php");    
//   } 

include "../inc/bdcomp.php";  ///////////modulo de compra


mysqli_free_result($result);
mysqli_close($cn);



?>

 
<div style="margin-top: 25%;">
</div>
<?php
  include "../user/footer.php";