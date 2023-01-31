<html>
<head>
<title> Banking Project</title>
</head>
<body bgcolor=lightblue>
<img src="images/head1.png"><br><br>

<table align=center border=1 width=80% cellpadding=5 cellspacing=5>

<tr><td colspan=6><h2>Transaction List</h2></td></tr>
<tr><td>ID</td><td>Transaction No</td><td>Date</td><td>Account Number</td><td>Debidet Amount</td><td>Creditet Amount</td></tr>
<?php
include("connfile.php");
	
	$sqlvar="SELECT * FROM TranTab order by TranNo desc";
	$result=$conn->query($sqlvar);
	
	while($row = $result->fetch_row()){
		echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td></tr>");	
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