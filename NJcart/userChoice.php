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