<?php
  include("header.php");
?>
<div id="adminContent">

<div id="leftSide">
<?php
 include("adminMenu.php");
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
	   echo("News has been saved");
	  }
	 echo("</div>");
   }
  ?>
</div>
<div id="myForm">
<form method="post" enctype="multipart/form-data" action="insertNews.php" >
<label>Enter News Heading</label>
<input type="text" name="txtHeading" />
<label>Enter News Detail</label>
<textarea name="txtDetail" rows="10"></textarea>


<input type="submit" value="Ok" />
<input type="reset" value="Cancel" />
</form>


</div><!--end of myForm-->



</div><!--end of rightSide-->


</div><!--end of content-->

<?php
 include("footer.php");
?>