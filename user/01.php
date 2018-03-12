<?php
	$titulopagina="Album";
	$cssfile ="register.css";
	include "../user/userheader.php";
  include '../bd/conexion.php';


   $select= "select albumN, artistN, anio from disco where idDisco=1";
 $result=mysqli_query($cn,$select);
/*$num_row = mysqli_num_rows($result);

if($num_row>0){
while ($row=$result->fetch_assoc()) {
 echo "\noras\n";
}
}*/

$row=mysqli_fetch_row($result);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$alb=$row[0];
$art=$row[1];
$an=$row[2];
$id="01.jpg";  //ID ALBUM
echo "$alb.$art.$an";

include "../inc/bdcomp.php";  ///////////modulo de compra


?>

<link rel="stylesheet" type="text/css" href="../css/album.css">
<script type="text/javascript" src="../js/purchase.js"></script>
  
<div  class="ui   grid" >

<div class=" ten wide column"  >


<table class="ui collapsing table" style="width: 500px;margin-left: 50px">
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
   $15.00
  </a>
      </td>
    </tr>
    <thead>
        <th>Trackname</th>
        <th>Length</th></thead>

    <tr><td><p>Introducing</p></td><td> 2:03 mins</td></tr>
    <tr><td><p>Righteous Path</p></td><td>2:20 mins</td></tr>
    <tr><td><p>Time In Motion</p></td><td>1:24 mins</td></tr>
    <tr><td><p>Alone Journey</p></td><td>3:45 mins</td></tr>
    <tr><td><p>Flute Story</p></td><td>4:11 mins</td></tr>
    <tr><td><p>Concious</p></td><td>3:47 mins</td></tr>
    <tr><td><p>Wind Message</p></td><td>4:21 mins</td></tr>
    <tr><td><p>To The Moon</p></td><td>3:38 mins</td></tr>
    <tr><td><p>Best Moments ft. Kondor</p></td><td>3:35 mins</td></tr>
    <tr><td><p>Little Piano</p></td><td>  1:59  mins</td></tr>
    <tr><td><p>Monk In a Hurry</p></td><td>5:28 mins</td></tr>
    <tr><td><p>Through the Way</p></td><td>2:38 mins</td></tr>
    <tr><td><p>Rebirth</p></td><td>6:01 mins</td></tr>
    <tr><td><p>Through the Way feat 2 mo'</p></td><td>6:01 mins</td></tr>
    <tr><td><p id="total">Total</p></td><td>41:42 mins</td></tr>

    </tbody>
</table>

</div>
<div class="three wide column" >
<div class="ui horizontal statistics" >
  <div class="statistic">
    <div class="value">
      4,203
    </div>
    <div class="label">
      Views
    </div>
  </div>
  <div class="statistic">
    <div class="value">
      1,322
    </div>
    <div class="label">
      Downloads
    </div>
  </div>
 
</div>  
</div>



<div  class="ui middle aligned center aligned grid" style="margin:-900px 20px 20px 600px;">
 <?php include "../inc/modcomp.php";?>

<?php
	include "../inc/footer.php";
