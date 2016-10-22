<?php
include_once("connect1.php");
$a=$_POST["Username"];
$b=$_POST["password"];
$b=md5($b);
$h;
if($a && $b)
{
	$h = "select *from  users where Username='$a' and password='$b';";
	$table=mysql_query($h);
	
	$numrows=mysql_num_rows($table);
	if($numrows!=0)
	{
		$row=mysql_fetch_assoc($table);
		
			$a=$row["Username"];
			$b=$row["password"];
			
	}
	
}
?>
<a href="homepage_history.html"><input type="button" value="Continue" /></a>