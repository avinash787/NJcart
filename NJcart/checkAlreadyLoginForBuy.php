<?php session_start();


$_SESSION["prodid"]=$_REQUEST["prodid"];
$_SESSION["price"]=$_REQUEST["price"];

if(isset($_SESSION["uname"]))
{
  	header("location:chooseProductQunatityForBuy.php");
}
else
{
	header("location:newLoginForm.php");
}


?>