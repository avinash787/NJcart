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
	   echo("Offer has been saved");
	  }
	 echo("</div>");
   }
  ?>
</div>
<div id="myForm">
<form method="post" enctype="multipart/form-data" action="insertOffer.php" >
<label>Enter Offer Name</label>
<input type="text" name="txtOfferName" />
<label>Choose Offer Start Date</label>
<input type="date" name="dtStart" />
<label>Choose Offer End Date</label>
<input type="date" name="dtEnd" />

<label>Choose Category</label>
<select name="cmbCategory">
<option value="0">Choose Category Name</option>

<?php
include("dbconnect.php");
$rs=mysqli_query($con,"select * from category_info order by cat_name");
while($row=mysqli_fetch_array($rs))
{
	$id=$row["cat_id"];
  echo("<option value='$id'>")	;
  echo($row["cat_name"]);
  echo("</option>")	;  
}
?>

</select>

<label>Enter Offer Discount in %</label>
<input type="text" name="txtDiscount" />


<input type="submit" value="Ok" />
<input type="reset" value="Cancel" />
</form>


</div><!--end of myForm-->



</div><!--end of rightSide-->


</div><!--end of content-->

<?php
 include("footer.php");
?>