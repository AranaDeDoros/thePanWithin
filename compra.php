<?php
session_start();

	$titulopagina="Shop";
	$cssfile ="register.css";
	include "/user/userheader.php";

  
  if($_SESSION['user']==''){
        header("Location: ../index.php");   
  } 

?>

<script type="text/javascript" src="../js/purchase.js"></script>

<link rel="stylesheet" type="text/css" href="../css/album.css">


<table class="ui collapsing table">
  <thead>
    <tr><th>Purchase</th><th>Details...</th>
  </tr></thead>
  <tbody>
    <tr>
      <td>
        <h4 class="ui image header">
        	<img  src="/img/smalllogob.png" style="width: 200px;height: 200px;" id="szmall" class="image">
          <div class="content">
              <p></p>
     <p>Album Title</p>
    <p>Artist Name</p>
     <p>Misc. Descript.</p>
 <p>Price:</p>
        </div>
      </h4></td>
      <td>
          <p></p>
     <p>Title Detail</p>
    <p>Artist Detail</p>
        <p>Misc. Detail</p>
                <p>Amount</p>
      </td>
    </tr>

  </tbody>
</table>


<div  class="ui middle aligned center aligned grid">
	<div class="column">

		<form  class="ui large form" action="/inc/buy.php" method="POST">
			        <div class="six wide column">
            <div class="ui form segment">

              <h1>Payment</h1>

              <div class="field">
                <label>Credit Card</label>
              	<input type="text" name="cardnumber" placeholder="Card Number" title="Card Number">
              </div>

              <div class="two fields">
                
                <div class="field">

                  <label>Expiration</label>


 <div class="ui selection dropdown" style="margin-left: -10px;">
  <input type="hidden" name="month">
  <i class="dropdown icon"></i>
  <div class="default text">Month</div>
  <div class="menu">
    <div class="item" data-value="01">January</div>
    <div class="item" data-value="02">February</div>
    <div class="item" data-value="03">March</div>
    <div class="item" data-value="04">April</div>
    <div class="item" data-value="05">May</div>
    <div class="item" data-value="06">June</div>
    <div class="item" data-value="07">July</div>
    <div class="item" data-value="08">August</div>
    <div class="item" data-value="09">September</div>
    <div class="item" data-value="10">October</div>
    <div class="item" data-value="11">November</div>
    <div class="item" data-value="12">December</div>
  </div>
</div>
                </div>

                <div class="field">
                  <label>Year (E.g 200XX)</label>
                 	<input  type="text" name="yearz" placeholder="Year" title="Year"> 
                </div>

              </div>


              <div class="field" style="width: 50%;margin-left:25%;">
                <label>Security Code (4 digits)</label>
                <input type="password" placeholder="Security Code" name="code" title="Security Code"> 
              </div>
              <div class="field" style="text-align:center;">
                
              </div>
              
              <div  id="buy"  class="ui large red submit button"> <i class="shop icon"></i> Confirm</div>
              <div  id="cancel"  class="ui large red button" onclick= window.history.back();>Return</div>
              </div>

              
            </div>
      
			<div class="ui success message">
				<span>Register Successful!</span>
			</div>
			<div class="ui error message">
				<span>Something went wrong. Try again later.</span>
			</div>
			<div class="ui warning message">
				<span>Be careful.</span>
			</div>
</form>
		</div>
	</div>
	
<script type="text/javascript">$('.ui.dropdown')
  .dropdown();</script>


<?php
	include "/user/footer.php";