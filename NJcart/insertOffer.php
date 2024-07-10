<?php
  $cats="";
   function getChildCategory($prnt)
   {
	   $GLOBALS["cats"]=$GLOBALS["cats"].$prnt."-";
	   include("dbconnect.php");
	   $rsCat=mysqli_query($con,"select cat_id from category_info where  cat_parent_id='$prnt'");
	   if(mysqli_num_rows($rsCat)==0)
	   {
		  return;   
	   }
	   else
	   {
		   while($row=mysqli_fetch_array($rsCat))
		   {
			 getChildCategory($row["cat_id"]);   
		   }
	   }  
	   
   }

$a=$_REQUEST["txtOfferName"];
$b=$_REQUEST["dtStart"];
$c=$_REQUEST["dtEnd"];
$d=$_REQUEST["cmbCategory"];
$e=$_REQUEST["txtDiscount"];


$tempdt=strtotime("1 day",strtotime($c));

$newdate=date('Y-m-d',$tempdt);
getChildCategory($d);




//$your_date = strtotime("1 day", strtotime($c));
//$new_date = date("Y-m-d", $your_date);

$str=substr($cats,0,strlen($cats)-1);


include("dbConnect.php");

mysqli_query($con,"insert into offer_info(offer_name,offer_start_dt,offer_end_dt,cat_type,offer_discount,reg_date) values('$a','$b','$newdate','$str','$e',now())") or die("Query Error");

header("location:offerForm.php?status=1");


?>