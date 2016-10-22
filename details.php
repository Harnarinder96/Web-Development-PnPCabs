<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>History of current User</title>
</head>

<body >
<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("pnpcabs")or die(mysql_error());
$sql="select *from booking where Username='Harry'";
$records=mysql_query($sql);

echo "<table border=1>
<tr>
<th >SOURCE LOCATION</th>
<th >VEHICLE TYPE</th>
<th >DESTINATION</th>
<th >DATE</th>
</tr>";
while($other=mysql_fetch_array($records))
{
echo "<tr>";
echo "<td bgcolor='#FFFF99'>" . $other['Source'] . "</td>";
echo "<td  bgcolor='#FFFF99'>" . $other['vehicle'] . "</td>";
echo "<td bgcolor='#FFFF99'>" . $other['destination'] . "</td>";
echo "<td bgcolor='#FFFF99'>" . $other['Date'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>

</body>
</html>