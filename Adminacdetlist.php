<html>
<head>
<title> Banking Project</title>
</head>
<body bgcolor=lightblue>
<img src="images/head1.png"><br><br>

<table align=center border=1 width=80% cellpadding=5 cellspacing=5>
<tr><td>ID</td><td>Account Name</td><td>Details</td><td>Facilities</td><td>Minimum Balance</td></tr>
<?php
include("connfile.php");
	
	$sqlvar="SELECT * FROM `actypeTab` order by `actypeTabName`";
	$result=$conn->query($sqlvar);
	
	while($row = $result->fetch_row()){
		echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>");	
	}
	
?>

</table>
<a href=adminmainpage.php>Back</a>
<table width=100%>
<tr height=250><td></td></tr>
</table>
<br><br><br>
<img src="images/head2.png">
</body>
</html>