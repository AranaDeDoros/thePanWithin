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
$id="04.jpg";  //ID ALBUM
//echo "$alb.$art.$an";

include "../inc/bdcomp.php";  ///////////modulo de compra

  if($_SESSION['user']==''){
    $pg="04";
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
  </a>
      </td>
    </tr>
    <thead>
        <th>Trackname</th>
        <th>Length</th></thead>

       <tr><td><p>Intro</p></td><td> 2:29 mins</td></tr>
    <tr><td><p>Lost</p></td><td>4:20 mins</td></tr>
    <tr><td><p>The List</p></td><td>3:26 mins</td></tr>
    <tr><td><p>Cloudy</p></td><td>3:13 mins</td></tr>
    <tr><td><p>Wind Spirits</p></td><td>4:11 mins</td></tr>
    <tr><td><p>Cool Calm Science</p></td><td>3:47 mins</td></tr>
    <tr><td><p>F@#$%&!*k Yooouu</p></td><td>4:21 mins</td></tr>
    <tr><td><p>2 A.M.</p></td><td>3:38 mins</td></tr>
    <tr><td><p>Tune In</p></td><td>3:35 mins</td></tr>
    <tr><td><p>Lost Interlude</p></td><td>  1:59  mins</td></tr>
    <tr><td><p>Dinner and Movie</p></td><td>5:28 mins</td></tr>
    <tr><td><p>Brush P.S.A</p></td><td>2:38 mins</td></tr>
    <tr><td><p>Wishes and Luck</p></td><td>6:01 mins</td></tr>
    <tr><td><p id="total">Total</p></td><td>45:28 mins</td></tr>

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

<div  class="ui middle aligned center aligned grid" style="margin:-850px 20px 20px 600px;">
<?php include "../inc/modcomp.php";?>

<?php
  include "../inc/footer.php";
