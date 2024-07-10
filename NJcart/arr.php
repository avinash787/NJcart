<html>
<body>
<?php
$str="1-3-7-8-10-6-9-";

$z=explode("-",$str);

if(in_array(17,$z))
{
  echo("hello");	
}
else
{
  echo("hi");	
}

/*
$x=array(10,20,30,40,50);


$y=implode(";;",$x);

echo($y);
*/

?>
</body>
</html>
