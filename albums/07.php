<?php
  $titulopagina="Album";
  $cssfile ="register.css";

  include '../bd/conexion.php';


$iBD=basename($_SERVER['PHP_SELF'],'.php'); 


 $select= "select albumN, artistN, anio,stock,downloads,price,idDisco from disco where idDisco=$iBD";
 $result=mysqli_query($cn,$select);


$row=mysqli_fetch_row($result);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$alb=$row[0];
$art=$row[1];
$an=$row[2];
$dls=$row[4];
$stock=$row[3];
$price=$row[5];
$idDisco=$row[6];
$id="07.jpg";  //ID ALBUM
//echo "$alb.$art.$an";

include "../inc/bdcomp.php";  ///////////modulo de compra

   if($_SESSION['user']==''){
    $pg="07";
  include "../inc/header.php";    
        
  } else {
    include "../user/userheader.php";    
  }
?>

<link rel="stylesheet" type="text/css" href="../css/album.css">
<script type="text/javascript" src="../js/purchase.js"></script>
  
<div  class="ui   grid" >

<div class=" ten wide column"  >


<table class="ui collapsing table" style="width: 500px;margin-left: 50px" >
  <thead>
    <tr><th><?php echo $alb ?></th><th><?php echo $art; ?></th>
  </tr></thead>
  <tbody>
    <tr>
      <td>
        <h4 class="ui image header" id="mDiv">
          <img  src="/albums/img/<?php echo "$id"; ?>" id="szmall" class="album">
          <div class="content">
              <p></p>
      <p>Album</p>
    <p>Artist</p>      <p>Year </p>
 <p>Price:</p>
        </div>
      </h4></td>
         <td id="det">
          <p></p>
    <p><?php echo $alb ?></p>
    <p><?php echo $art; ?></p>
        <p><?php echo $an; ?></p>
                <a class="ui label">
$<?php echo $price?>
      </td>
    </tr>
    <thead>
        <th>Trackname</th>
        <th>Length</th></thead>

    <tr><td><p>Time Has Told Me  </p></td><td>3:56 mins</td></tr>
    <tr><td><p>River Man</p></td><td>4:28 mins</td></tr>
    <tr><td><p>Three Hours</p></td><td>6:01 mins</td></tr>
    <tr><td><p>Day Is Done</p></td><td>2:22 mins</td></tr>
    <tr><td><p>Way To Blue</p></td><td>3:05 mins</td></tr>
    <tr><td><p>Cello Song</p></td><td>3:58 mins</td></tr>
    <tr><td><p>The Thoughts Of Mary Jane</p></td><td>3:12 mins</td></tr>
    <tr><td><p>Man In A Shed</p></td><td>3:49 mins</td></tr>
    <tr><td><p>Fruit Tree </p></td><td>4:42 mins</td></tr>
        <tr><td><p>Saturday Sun</p></td><td>4:00 mins</td></tr>
    <tr><td><p id="total">Total</p></td><td>39:33 mins</td></tr>

    </tbody>
</table>
</div>

<div class="three wide column" >
<div class="ui horizontal statistics" >
  <div class="statistic">
    <div class="value">
      <?php echo $stock?>
    </div>
    <div class="label">
      ON STOCK
    </div>
  </div>
  <div class="statistic">
    <div class="value">
      <?php echo $dls?>
    </div>
    <div class="label">
      Downloads
    </div>
  </div>
 
</div>  
</div>

<div  class="ui middle aligned center aligned grid" style="margin:-600px 20px 20px 600px;">
  <?php include "../inc/modcomp.php";?>









<?php
  include "../inc/footer.php";
