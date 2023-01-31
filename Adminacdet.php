<html>
<head>
<title> Banking Project</title>
</head>
<body bgcolor=lightblue>
<img src="images/head1.png"><br><br>
<?php
include("connfile.php");
session_start();
$res="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
	
	$v1=$_POST['text1'];
	$v2=$_POST['text2'];
	$v3=$_POST['text3'];
	$v4=$_POST['text4'];
	
	$sqlvar="insert into actypeTab (`actypeTabName`, `acdetails`, `facility`, `minbal`) values('$v1', '$v2', '$v3', '$v4')";
	
	$result=$conn ->query($sqlvar);
	if($result)
	{
		$res="Record Inserted";
	}
	else
	{
		$res="Record Not Inserted, some problem";
	}
	
}

?>
<form name=form1 method="post" action="Adminacdet.php">

<table width=40% border=1 cellspacing=$ cellpadding=$ align=center>
<tr><td colspan=2><h2>Account Type Details Entry</h2></td></tr>
<tr><td>Account Name</td><td><input type=text name=text1></td></tr>
<tr><td>Account Details</td><td><input type=text name=text2></td></tr>
<tr><td>Facilities</td><td><input type=text name=text3></td></tr>
<tr><td>Minimum Balance</td><td><input type=text name=text4></td></tr>
<tr><td><a href=adminmainpage.php>Back</a></td><td><input type=submit name=Login style="height:40px; width:175px"></td></tr>
<tr><td colspan=2><?php echo $res; ?></td></tr>
</table>

</form>  
<table width=100%>
<tr height=250><td></td></tr>
</table>
<br><br><br>
<img src="images/head2.png">
</body>
</html>