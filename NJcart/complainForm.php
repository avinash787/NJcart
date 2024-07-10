<?php
  include("header.php");
?>
<div id="adminContent">

<div id="leftSide">
<?php
 include("userMenu.php");
?>

</div><!--end of leftSide-->


<div id="rightSide">
<div>&nbsp;
  <?php
   if(isset($_REQUEST["status"]))
   {
     echo("<div id='responseMsg'>");
	  if($_REQUEST["status"]==1)
	  {
	   echo("Complaine has been saved");
	  }
	 echo("</div>");
   }
  ?>
</div>
<div id="myForm">
<form method="post" enctype="multipart/form-data" action="insertComplain.php" >
<?php
$rec="admin";

?>
<label>Complain To</label>
<input type="text" name="txtReceiver" readonly="readonly" value='<?php echo("$rec");?>'/>


<label>Complain Heading</label>
<input type="text" name="txtHeading" />
<label>Complain Detail</label>
<textarea name="txtDetail" rows="10"></textarea>


<input type="submit" value="Ok" />
<input type="reset" value="Cancel" />
</form>


</div><!--end of myForm-->


</div><!--end of leftSide-->


</div><!--end of adminContent-->

<?php
 include("footer.php");
?>