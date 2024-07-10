<?php
$con=mysqli_connect("127.0.0.1","root","") or die("Connection error");
mysqli_select_db($con,"bitcart") or die("database selection error");
?>