<?php
  include("header.php");
?>
<div id="content">
<div>&nbsp;
  <?php
   if(isset($_REQUEST["status"]))
   {
     echo("<div id='responseMsg'>");
	  if($_REQUEST["status"]==1)
	  {
	   echo("Data has been saved");
	  }
	 echo("</div>");
   }
  ?>
</div>
<div id="myForm">
<form method="get" action="insertCustomer.php">
<label>Enter your name</label>
<input type="text" name="txtName" />
<label>Enter your Email id</label>
<input type="text" name="txtEmail" />
<label>Enter your Mobile No</label>
<input type="text" name="txtMobile" />
<label>Enter your user name</label>
<input type="text" name="txtUser" />
<label>Enter your password</label>
<input type="password" name="txtPassword" />

<input type="submit" value="Ok" />
<input type="reset" value="Cancel" />
</form>


</div><!--end of myForm-->

<div>&nbsp;</div>



</div><!--end of content-->

<?php
 include("footer.php");
?>