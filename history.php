<?php
include_once("connect1.php");
$b=$_POST["Source"];
$c=$_POST["vehicle"];
$d=$_POST["destination"];
$a=$_POST["Username"];
$e=$_POST["Date"];



   
	$res=mysql_query("insert into 
  booking(Source,vehicle,destination,Username,Date)
  values('$b','$c','$d','$a','$e')")or die(mysql_error());
    echo "SUCCESSFUL";

?>
<br><br><br><a href="demo_map.html">BACK TO HOME!!!!</a>