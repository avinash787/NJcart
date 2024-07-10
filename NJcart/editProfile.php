<?php @session_start();
  if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="user")
  {
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
	   echo("Data has been updated.");
	  }
	 echo("</div>");
   }
  ?>
</div>
<?php
include("dbconnect.php");
$usr=$_SESSION["uname"];
$rsUser=mysqli_query($con,"select * from customer_info where user_name='$usr'");
$row=mysqli_fetch_array($rsUser);

$a=$row["cust_name"];
$b=$row["cust_email"];
$c=$row["cust_mobile"];
$d=$row["user_pass"];
?>
<div id="myForm">
<form method="get" action="updateProfile.php">
<label>Enter your name</label>
<input type="text" name="txtName" value='<?=$a?>'/>
<label>Enter your Email id</label>
<input type="text" name="txtEmail" value='<?=$b?>'/>
<label>Enter your Mobile No</label>
<input type="text" name="txtMobile" value='<?=$c?>'/>
<label>Enter your user name</label>
<input type="text" name="txtUser" readonly="readonly" value='<?=$usr?>' />
<label>Enter your password</label>
<input type="password" name="txtPassword" value='<?=$d?>' />

<input type="submit" value="Ok" />
<input type="reset" value="Cancel" />
</form>


</div><!--end of myForm-->

<div>&nbsp;</div>

</div><!--end of rightSide-->


</div><!--end of adminContent-->

<?php
 include("footer.php");
 }
  else
  {
    header("location:loginForm.php");	  
  }

?>