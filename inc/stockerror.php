 <?php

session_start();
 
	$titulopagina="Error";
	$cssfile ="register.css";
  include "../user/userheader.php";
  include '../bd/conexion.php';



  $idDisco=$_POST['idDisco'];




$select= "select albumN, artistN, anio,stock,downloads from disco where idDisco='".$idDisco."'";
 $result=mysqli_query($cn,$select);



$alb=$row[0];
$art=$row[1];

?>


<style type="text/css">
.ui.modal{
   font-size: 20px;
  }
</style>
<div class="ui modal" id="empty">
  
  <div class="header">
  <span> ERROR!</span>
  </div>
  <div class="image content">
    <div class="ui medium image">
    <i class="sound icon"></i>
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

 <script type="text/javascript">


 $('.ui.modal').modal({closable:false}).modal('show');
;</script>
<div style="margin-top: 25%;">
</div>
 <?php include '../inc/footer.php' ?>