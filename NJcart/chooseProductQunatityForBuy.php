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
	   echo("Invalid user name");
	  }
	  else if($_REQUEST["status"]==2)
	  {
		  echo("Invalid password");  
	  }
	 echo("</div>");
   }
  ?>


</div>
<div id="myForm">
<form method="get" action="insertCart.php">
<label>Enter product quantity</label>
<input type="text" name="txtQunatity" />

<input type="submit" value="Ok" />
<input type="reset" value="Cancel" />
</form>


</div><!--end of myForm-->

<div>&nbsp;</div>



</div><!--end of content-->

<?php
 include("footer.php");
?>