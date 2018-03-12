<!--Archivo Base-->
<!DOCTYPE html>
<HTML>
	<head>
	<title><?php echo $titulopagina?></title>
		<meta charset="UTF-8">
		<meta name="keywords" content="html css javascript php mysql">
		<meta name="author" content="Ricardo David Rojas Flores">
		<meta name="description" content="buy music compra musica">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<script type="text/javascript" src="../semantic/jquery.min.js"></script>
		<script type="text/javascript" src="../semantic/dist/semantic.min.js"></script>
    	<link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">
		<link rel="stylesheet" type="text/css" href="../css/header.css">
				<link rel="stylesheet" type="text/css" href="../css/main.css">
			<link rel="stylesheet" href="/css/<?php echo $cssfile;?>">
			<a id="ban" href="../index.php"><img style="border-radius:2px;" src="/img/banner.jpg" height="auto" width="100%" alt="notfound"></a>
	</head>
<style type="text/css">
	#ban:hover{	-webkit-filter: brightness(70%);filter: brightness(70%);
	            -webkit-filter: invert(75);filter: invert(75%);                                                         }
</style>

<!-- 	<body><div class="ui vertical menu">
  <div class="ui dropdown item">
  <input type="hidden" name="categories">
    Categories
    <i class="dropdown icon"></i>
    <div class="menu">
      <a class="item">Electronics</a>
      <a class="item">Automotive</a>
      <a class="item">Home</a>
    </div>
  </div>
</div>

<script type="text/javascript">$('.ui.dropdown')
  .dropdown()
;</script> -->
		<nav><div class="ui inverted menu" id="naver" style="margin-top: -7px;">
			<a class="item" href="../index.php"> <i class="home icon"></i>
				Home
			</a>
			<a class="item" href="../bibliotheque.php"><i class="grid layout icon"></i>
				Browse Latest Submissions
			</a>
			<a class="item" href="../login.php"><i class="plug icon"></i> Login
			</a>
			<a class="item" href="../register.php"><i class="user 	icon"></i>
				Register
			</a>
			<div class="right item">
				<i class="search icon"></i> <div class="ui input"><input type="text" placeholder="Search..."></div>
			</div>
		</div></nav>

