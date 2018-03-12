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
$id="05.jpg";  //ID ALBUM
//echo "$alb.$art.$an";

include "../inc/bdcomp.php";  ///////////modulo de compra

  if($_SESSION['user']==''){
    $pg="05";
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
    <p>Artist</p>      
    <p>Year </p>
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
  </a>
      </td>
    </tr>
    <thead>
        <th>Trackname</th>
        <th>Length</th></thead>

    <tr><td><p>Subterranean Homesick Blues</p></td><td>2:17 mins</td></tr>
    <tr><td><p>She Belongs To Me</p></td><td>2:48 mins</td></tr>
    <tr><td><p>Maggie's Farm</p></td><td>3:51 mins</td></tr>
    <tr><td><p>Love Minus Zero / No Limit</p></td><td>2:47 mins</td></tr>
    <tr><td><p>Outlaw Blues</p></td><td>3:00 mins</td></tr>
    <tr><td><p>On The Road Again</p></td><td>2:30 mins</td></tr>
    <tr><td><p>Bob Dylan's 115th Dream</p></td><td>6:29 mins</td></tr>
    <tr><td><p>Mr. Tambourine Man</p></td><td>5:25 mins</td></tr>
    <tr><td><p>Gates Of Eden  5:42</p></td><td>5:42 mins</td></tr>
    <tr><td><p>It's Alright, Ma (I'm Only Bleeding)</p></td><td>7:30 mins</td></tr>
    <tr><td><p>It's All Over Now, Baby Blue</p></td><td>4:13 mins</td></tr>
    <tr><td><p id="total">Total</p></td><td> 46:32 mins</td></tr>

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


<div  class="ui middle aligned center aligned grid" style="margin:-700px 20px 20px 600px;">
 <?php include "../inc/modcomp.php";?>








<?php
  include "../inc/footer.php";
