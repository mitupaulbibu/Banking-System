<html>
<head>
<title> Banking Project</title>
</head>
<body bgcolor=lightblue>
<img src="images/head1.png"><br><br>

<table align=center border=1 width=80% cellpadding=5 cellspacing=5>
<tr><td>Account Number</td><td>Name</td><td>Address</td><td>Mobile Number</td><td>Email</td><td>Account Type</td></tr>
<?php
include("connfile.php");
	
	$sqlvar="SELECT * FROM `CustAcTab` where custapp='N'";
	$result=$conn->query($sqlvar);

	while($row = $result->fetch_row()){
		echo("<tr><td><a href=adminapp.php?acno=".$row[0].">".$row[0]."</a></td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>");	
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