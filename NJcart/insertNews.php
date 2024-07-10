<?php

$a=$_REQUEST["txtHeading"];
$b=$_REQUEST["txtDetail"];
include("dbconnect.php");
mysqli_query($con,"insert into news_info(news_heading,news_detail,reg_date,del_status) values('$a','$b',now(),0)");

header("location:newsForm.php?status=1");

?>