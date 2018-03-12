


  <div class="column" id="compra">
<div id="panel"><table class="ui collapsing table"  style="width: 500px;margin-left: 50px;margin-top: 26.66%">
   <thead>
    <tr><th><?php echo $alb ?></th><th><?php echo $art; ?></th>
  </tr></thead>
  <tbody>
    <tr>
      <td>
        <h4 class="ui image header" id="mDiv">
          <img  src="/albums/img/<?php echo $id; ?>" id="szmall" class="album">
          <div class="content">
              <p></p>
      <p>Album</p>
    <p>Artist</p>      <p>Year </p>
 <p>Price:</p>
        </div>
      </h4></td>
      <td>
          <p></p>
    <p><?php echo $alb ?></p>
    <p><?php echo $art; ?></p>
        <p><?php echo $an; ?></p>
                <a class="ui label">
   $15.00
  </a>
      </td>
    </tr></tbody>
</table>
</div>
    <form  class="ui large form" action="/inc/buy.php" method="POST">
              <div class="six wide column">
            <div class="ui form segment">

              <h1>Payment</h1>

              <div class="field">
                <label>Credit Card</label>
                <input type="text" name="cardnumber" placeholder="Card Number" title="Card Number" value="<?php echo $numero;?>" readonly>
              </div>

              <div class="two fields">
                
                <div class="field">

                  <label>Expiration</label>

<div class="ui selection dropdown" style="margin-left: -10px;">
  <input type="hidden" name="month" value="<?php echo $fecha;?>" readonly>
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
                  <input  type="text" name="yearz" placeholder="Year" title="Year" value="<?php echo $anio;?>" readonly> 
                </div>

              </div>


              <div class="field" style="width: 50%;margin-left:25%;">
                <label>Security Code (4 digits)</label>
                <input type="password" placeholder="Security Code" name="code" title="Security Code" id="scode"> 
              </div>
              <div class="field" style="text-align:center;">
                <input type="text" name="idDisco" value=" <?php echo $idDisco; ?>" hidden>
              </div>
              
              <button  id="buy"  class="ui large red submit button" name="purchase"> <i class="shop icon"></i> Confirm</button>
              <button  id="cancel"  class="ui large red button" onclick= window.history.back();>Return</button>
              </div>
              <span id="gc"> Good choice!</span>

              
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
  .dropdown().addClass("disabled");</script>

<script type="text/javascript" src="../js/anim.js"></script>
</div>

