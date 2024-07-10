<?php
$a=$_REQUEST["txtName"];
$b=$_REQUEST["txtEmail"];
$c=$_REQUEST["txtMobile"];
$d=$_REQUEST["txtUser"];
$e=$_REQUEST["txtPassword"];
include("dbconnect.php");
mysqli_query($con,"insert into customer_info(cust_name,cust_email,cust_mobile,user_name,user_pass,user_type,reg_date) values('$a','$b','$c','$d','$e','user',now())");

header("location:customerForm.php?status=1");

?>