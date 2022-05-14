<!DOCTYPE HTML>
<html>
<head>
<title>
2022 PHP & C# Test
</title>
</head>

<body>
<?php
echo"<table class="Year">;
echo"<tr>";
echo"<td>Id</td>";
echo"<td>Date</td>";
echo"<td>Day</td>";
echo"</tr>";
if(!mysql_affected_rows($row)){
	echo"error";
}
if(!mysql_num_rows($row)){
	echo"error";
}

if(!mysql_select_db($db)){
	echo"error";
}

$query="CREATE TABLE Year WHERE {Id},{Date},{Day} LIKE '"\n"Date"\n"'";

echo"$query";

while(mysql_num_rows($row)){
	echo"<tr>";
}
?>
</table>
</body>
</html>