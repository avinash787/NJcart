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
<?php
include("dbconnect.php");
$usr=$_SESSION["uname"];
$rsOrder=mysqli_query($con,"select * from order_master where user_name='$usr' and (order_status='Transit' or order_status='Dispatched') order by order_id desc");
echo("<div id='myList'>");
	echo("<table border='1'>");
	echo("<tr>");
    echo("<th>Sl.No.</th>");
    echo("<th>Customer Name</th>");	
    echo("<th>Order Date</th>");
    echo("<th>Total Amount</th>");
    echo("<th>Status</th>");
	echo("</tr>");
	$cnt=0;
	while($row=mysqli_fetch_array($rsOrder))
	{
	 	$cnt++;
		$id=$row["order_id"];
	 echo("<tr>");	
		 echo("<td>");	
	       echo($cnt);
		 echo("</td>");
		 echo("<td>");	
	       echo($row["user_name"]);
		 echo("</td>");
		 echo("<td>");	
	       echo($row["order_date"]);
		 echo("</td>");
		 echo("<td>");	
	       echo($row["total_amount"]);
		 echo("</td>");
		 
 		 echo("<td>");	
	       echo("<a href='displayOrderDetailForCancelUser.php?id=$id'>Detail</a>");
		 echo("</td>");

		 

	echo("</tr>");
	}

echo("</table>");
echo("</div>");
?>



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