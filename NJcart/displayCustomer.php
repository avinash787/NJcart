<?php @session_start();
  if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin")
  {
       
    include("header.php");
?>
<div id="adminContent">

<div id="leftSide">
<?php
 include("adminMenu.php");
?>

</div><!--end of leftSide-->


<div id="rightSide">
<?php
 require_once("library.php");
 displayTable("select * from customer_info");
?>
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