<?php
  include("header.php");
?>
<div id="content">

<div id="register">
<a href="displayNews.php">News</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="customerForm.php">New User</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="loginForm.php">Login</a>
</div>

<div id="categoryArea">
<?php
  if(isset($_REQUEST["cid"]))
  {
	$prid=$_REQUEST["cid"];
  }
  else
  {
	$prid=0;  
  }


  include("dbconnect.php");
 $rs=mysqli_query($con,"select * from category_info where cat_parent_id=$prid order by cat_dname");
  while($row=mysqli_fetch_array($rs))
  {
	echo("<div class='category'>"); 
    $id=$row["cat_id"];
	echo("<a href='index.php?cid=$id'>"); 
	echo($row["cat_dname"]);
	echo("<br><br>");
	$img=$row["image_path"];
	echo("<img src='.\\collection\\$img' width='100' height='100' border='2'>");
	echo("</a>");
	echo("</div>");  
	
  }
?>
</div><!--end of categoryArea-->
<hr>
<div id="itemArea">
<?php
  if(isset($_REQUEST["cid"]))
  {
	$prid=$_REQUEST["cid"];
  }
  else
  {
	$prid=0;  
  }


  include("dbconnect.php");
 $rs=mysqli_query($con,"select * from item_info where parent_category=$prid order by item_name");
  while($row=mysqli_fetch_array($rs))
  {
	echo("<div class='item'>"); 
    $id=$row["item_id"];

	echo($row["item_name"]);
	echo("<br><br>");
	$img=$row["image_path"];
	echo("<img src='.\\collection\\$img' width='100' height='100' border='2'>");
	echo("<br><br>");
	echo("Detail : ".$row["item_detail"]); 
    echo("<br>");
	echo("Rate : <s>".$row["item_rate"]."</s>"); 		

     $dis=$row["item_discount"];
	 
	 $spdis=0;
	//$rsOffer= mysqli_query($con,"select * from offer_info where now()>= offer_start_dt and now() <= offer_end_dt");
	
	$rsOffer= mysqli_query($con,"select * from offer_info where now() between offer_start_dt and offer_end_dt");
	
	while($rowOffer=mysqli_fetch_array($rsOffer))
	{
	   	$cats=$rowOffer["cat_type"];
		$catarr=explode("-",$cats);
		if(in_array($prid,$catarr))
		{
		  $spdis = $spdis + $rowOffer["offer_discount"]; 	
		}
		
	}
	 
	 
     $dis = $dis + $spdis;
   
     $final=$row["item_rate"] - $row["item_rate"] * $dis/100;
   
       echo("<br>");
	echo("Dis. Rate : ".$final); 	
	echo("<div class='buyButton'>");
	  echo("<a href='checkAlreadyLoginForBuy.php?prodid=$id&price=$final'>Buy</a>");
	echo("</div>");	


	echo("</div>");  
	
  }
?>
</div><!--end of categoryArea-->



</div><!--end of content-->

<?php
 include("footer.php");
?>