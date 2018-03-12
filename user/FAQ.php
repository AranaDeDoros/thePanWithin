<?php
	session_start();

	
	if($_SESSION['user']==''){
	    	header("Location: ../index.php");		
	}	


	$titulopagina="Welcome to The Pan Within";
	$cssfile ="index.css";
	include "../user/userheader.php";
?>

<style type="text/css">
	p.q{
		font-weight: bold;
		font-size: 30px;
		font-family: "Poet";
	}
	h1{
		font-size: 50px;
		font-family: "Poet";
	}
</style>

<h1>F.A.Q Frequently Asked Questions</h1>
<p class="q">Is my information secure?  </p>
<p>We at TPW ensure the safety of your information.</p>

<p class="q">Is there a limit to downloads?</p>
<p>At the moment we have set downloads once a time. With time this will be probably improved.</p>

<p class="q">Is the money reaching the artists?</p>
<p>Certainly, we ensure to share the money earned through our services, fair and square.</p>

<p class="q">Why is the selection so small?</p>
<p>We are very picky when it comes to the music that makes it into our library. You can rest asured we always are hoping to offer less known, yet good music. </p>

<p class="q">Can you add X?</p>
<p>We are always willing to discover new music, suggestions are always welcome. You can contact us at admin(at)thepanwithin.ccom"</p>

<p class="q">Can I refund?</p>
<p>There is a possibility for refunds, however you must apply.</p>
<?php
	include "../user/footer.php";