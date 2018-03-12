<?php	$titulopagina="Welcome to The Pan Within";
	$cssfile ="index.css";
	include "/inc/header.php";	include '/bd/conexion.php';


 $st= "select idDisco, albumN, artistN from disco order by idDisco desc limit 5";
 $rt=mysqli_query($cn,$st);
 $rw=mysqli_fetch_row($rt);

foreach ($rt as $rw) {
   
  $ran[]=$rw['albumN'];
  $ratn[]=$rw['artistN'];
  $rid[]=$rw['idDisco'];
}




if (!$rw) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}


mysqli_free_result($rt);
mysqli_close($cn);


?>
<!-- Page Contents -->
<br>
<div class="ui horizontal divider">Welcome to The Pan Within</div>
<div class="ui text container">
	<h1 class="ui header">
	</h1>    <p class="reg">The lair where Pan enjoys himself with music from around the globe. Sit back, relax, and listen to some new music. Register and gain access to buy music from all eras, countries, etc.</p>
</div>

    <div class="ui text container">
     <div class="ui horizontal divider"> Discover New Music</div> 
      <p class="reg">Our Music Library is updated every day with both old and new music. Get to know musicians you've never heard of and broaden your musical taste!</p>
    </div>

    <div class="ui text container">
     <div class="ui horizontal divider">Interested?</div> 
<button id="signup" onclick=window.location.href="../register.php" class="ui huge button"><i class="sign in icon"></i>Sign-Up </button>
    </div>


<div class="ui horizontal divider">Latest Additions</div>
<div id="gallery" class="ui center aligned five column grid">
	<div class="column">
		<div class="ui segment"><img src="../albums/img/<?php echo $rid[4]; ?>.jpg">	<table><tbody><tr><td><?php echo $ran[4] ?></td></tr><tr><td><?php echo $ratn[4] ?></td></tr></tbody></table></div>
	</div>
	<div class="column">
		<div class="ui segment"><img src="../albums/img/<?php echo $rid[3]; ?>.jpg"><table><tbody><tr><td><?php echo $ran[3] ?></td></tr><tr><td><?php echo $ratn[3] ?></td></tr></tbody></table></div>
	</div>
	<div class="column">
		<div class="ui segment"><img src="../albums/img/<?php echo $rid[2]; ?>.jpg"><table><tbody><tr><td><?php echo $ran[2] ?></td></tr><tr><td><?php echo $ratn[2] ?></td></tr></tbody></table></div>
	</div>
	<div class="column">
		<div class="ui segment"><img src="../albums/img/<?php echo $rid[1]; ?>.png"><table><tbody><tr><td><?php echo $ran[1] ?></td></tr><tr><td><?php echo $ratn[1] ?></td></tr></tbody></table></div>
	</div>
	<div class="column">
		<div class="ui segment"><img src="../albums/img/<?php echo $rid[0]; ?>.jpg"><table><tbody><tr><td><?php echo $ran[0] ?></td></tr><tr><td><?php echo $ratn[0] ?></td></tr></tbody></table></div>
	</div>
</div>
<?php
	include "/inc/footer.php";