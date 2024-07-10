<?php
$a=$_REQUEST["txtCatName"];
$b=$_REQUEST["txtCatDName"];
$c=$_FILES["flImage"];
$d=$_REQUEST["cmbCatType"];
$e=$_REQUEST["cmbParent"];

$img=$c["name"];

move_uploaded_file($c["tmp_name"],".\\collection\\$img");
include("dbconnect.php");

mysqli_query($con,"insert into category_info(cat_name,cat_dname,image_path,cat_type,cat_parent_id,reg_date) values('$a','$b','$img','$d','$e',now())") or die("Query error");

header("location:categoryForm.php?status=1");

?>