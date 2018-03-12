<?php
session_start();

	$titulopagina="Purchases";
	$cssfile ="register.css";
	include "../user/userheader.php";
  include '../bd/conexion.php';

$varu=$_SESSION['user'];
$check= "select  * from ".$varu."_sales     ";
        $result=mysqli_query($cn,$check);
$row=mysqli_fetch_row($result);

	?>


  <link rel="stylesheet" type="text/css" href="../css/purchases.css">



<a class="ui  image label"  id="ulabel">
  <p id="su"><?php echo $varu ?></p>
  <div class="detail" ><p id="l">Logged in as</p></div>
</a>

<h4 class="ui horizontal divider header">
  <i class="bar chart icon"></i>
 Historial
</h4>

<table class="ui selectable celled table" id="pch">
  <thead>
  <tr>
  
      <th  class="sorted ascending">Album Name</th>
      <th  class="sorted ascending">Artist</th>
      <th  class="sorted ascending">Bought at</th>
    </tr>  </thead>
  <tbody>
	<?php 
	$num_row=mysqli_num_rows($result);
	if($num_row>0){
foreach($result as $row ){
echo  '<tr><td>'.$row['albumN'].'</td>
        <td>'.$row['artistN'].'</td>
        <td>'.$row['saleDate'].'</td>
        </tr>'
    ;
}}
else echo '<tr><td>No data to display</td>
        <td>No data to display</td>
        <td>No data to display</td>
        </tr>';

	 ?>
	  </tbody>
</table>

<h4 class="ui horizontal divider header">
  <i class="music icon"></i>
  Purchases
</h4>
<div style="margin-bottom: 5%">
	
</div>

<script>   $(document).ready(function() 
    { 
        $('table').tablesort(); 
    } 
); 
    </script>
<?php
  include "../user/footer.php";