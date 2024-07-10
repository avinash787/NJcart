<?php
@session_start();
  if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin")
  {
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
	   echo("Data has been saved");
	  }
	 echo("</div>");
   }
  ?>
</div>
<div id="myForm">
<form method="post" enctype="multipart/form-data" action="insertCategory.php" >
<label>Enter Category Name</label>
<input type="text" name="txtCatName" />
<label>Enter Category Display Name</label>
<input type="text" name="txtCatDName" />
<label>Choose Category Image</label>
<input type="file" name="flImage" />


<label>Choose Category Type</label>
<select name="cmbCatType">
<option>Primary</option>
<option>Secondary</option>
</select>

<label>Choose Parent Category</label>
<select name="cmbParent">
<option>Choose parent name</option>

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


<input type="submit" value="Ok" />
<input type="reset" value="Cancel" />
</form>


</div><!--end of myForm-->



</div><!--end of rightSide-->


</div><!--end of content-->

<?php
 include("footer.php");
 }
  else
  {
    header("location:loginForm.php");	  
  }

?>