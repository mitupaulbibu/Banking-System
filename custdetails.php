<html>
<head>
<title> Banking Project</title>
</head>
<body bgcolor=lightblue>
<img src="images/head1.png"><br><br>

<table align=center border=1 width=80% cellpadding=5 cellspacing=5>

<?php
include("connfile.php");
	session_start();
	$v1=$_SESSION['acno'];
	$sqlvar="SELECT * FROM CustAcTab where acno=$v1";
	$result=$conn->query($sqlvar);

	while($row = $result->fetch_row()){
		echo("<tr><td>Account Number</td><td>".$row[0]."</td></tr><tr><td>Name</td><td>".$row[2]."</td></tr><tr><td>Address</td><td>".$row[3]."</td></tr><tr><td>Mobile Number</td><td>".$row[4]."</td></tr><tr><td>Email</td><td>".$row[5]."</td></tr><tr><td>Account Type</td><td>".$row[6]."</td></tr>");	
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