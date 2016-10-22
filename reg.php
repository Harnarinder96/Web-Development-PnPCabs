<?php
include_once("connect1.php");
$b=$_POST["Username"];
$c=$_POST["password"];
$d=$_POST["Email_id"];
$a=$_POST["Phone_no"];
if($b==""||$c==""||$d==""||$a=="")
{
	echo "FILL THE DETAILS";
}
else{
	$query=mysql_query("Select *from users where Username='$b'");
if(mysql_num_rows($query)>0){
		echo "Username already exists"; }
else
{   $c=md5($c);
	$res=mysql_query("insert into 
  Users(Username,password,Email_id,Phone_no)
  values('$b','$c','$d','$a')")or die(mysql_error());
    echo "SUCCESSFUL";
}
}
?>
<br><br><br><a href="newindex.php?a=0">LOGIN TO CONTINUE!!!!</a>