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

<div style="width:80%; margin:10px; padding:20px;border:2px solid black;">
<?php
$id=$_REQUEST["nid"];
 include("dbconnect.php");
$rsNews= mysqli_query($con,"select * from message_info where msg_id='$id' order by sent_date desc");
$row=mysqli_fetch_array($rsNews);



	$id=$row["msg_id"];
	$hd=$row["msg_heading"];
	$sn=$row["sender_name"];
	$dt=$row["sent_date"];		
	$dtl=$row["msg_detail"];
    echo("Heading : ".$hd);
	echo("<hr>");
    echo("Rec. Date : ".$dt);
	echo("<hr>");
    echo("Sender Name : ".$sn);
	echo("<hr>");
    echo("Detail : ".$dtl);
	echo("<hr>");
	
	


?>


</div>





</div><!--end of leftSide-->


</div><!--end of adminContent-->

<?php
 include("footer.php");
 }
  else
  {
    header("location:loginForm.php");	  
  }

?>