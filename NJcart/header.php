<?php @session_start(); ?>
<html>
<head>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>

<div id="main">

   <div id="header">
   
     <div id="leftLogo">
       <img src="images/logo1.jpg">
     </div><!--end of leftLogo-->
     <div id="title">
        <h1><a href='index.php' style="color:yellow">NJ Cart</a></h1>
        <h3>A trusted company with quality product</h3>
        <?php
		  if(isset($_SESSION["uname"]))
		  {
			 echo("<div id='welcomeUser'>");
			 $usr=$_SESSION["uname"];
			 echo("Welcome ". $_SESSION["uname"]." , ");
			 echo("<a href='logout.php'>Logout</a>");
			 
			  if($_SESSION["utype"]=="user")
			  {
				echo("&nbsp;&nbsp;<a href='displayCartForOrder.php'> <img src='images\logo1.jpg' width='20' height='20' align='top'>");  
				 include("dbconnect.php");
				 $rsCart=mysqli_query($con,"select count(*) from cart_info where user_name='$usr'");
				 $row=mysqli_fetch_array($rsCart);
				 $cnt=$row[0]; 
				 echo("($cnt)");
				  
				  echo("</a>");
			  }
			 
 			 echo("</div>");  
			  
		  }
		
		?>
     </div><!--end of title-->
     <div id="rightLogo">
        <img src="images/logo2.jpg">
     </div><!--end of leftLogo-->

<div id="searchBar">
<form method="get" action="searchResult.php">
 Enter Search Criteria <input type="text" name='txtSearch'> <input type="submit" value='Ok'>
</form>

</div>
   
   </div><!--end of header-->