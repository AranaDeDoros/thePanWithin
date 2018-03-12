 <?php
	$titulopagina="Error";
	$cssfile ="register.css";
	include "../inc/header.php";
?>
<div style="margin:15% 0 15% 0;">

</div>
<style type="text/css">
.ui.modal{
   font-size: 20px;
	}
</style>
<div class="ui modal">
  <div class="header">
  <span>ERROR!</span>
  </div>
  <div class="image content">
    <div class="ui medium image">
    <i class="warning sign icon"></i>
    </div>
    <div class="description">
      <div class="ui header">An error ocurred.</div>
      <p>Username info already registered. Pick another one.</p>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button" onclick= window.location.href="../index.php";>
      Back to Index
    </div>
    <div class="ui positive right labeled icon button" style="background-color: red" onclick= window.location.href="../register.php";>
    Back to register form.
      <i class="checkmark icon"></i>
    </div>
  </div>

</div> 

 <script type="text/javascript">$('.ui.modal').modal({closable:false}).modal('show');

  </script>
<div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
 <?php include '../inc/footer.php' ?>