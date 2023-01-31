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
	$v3=$_POST['text4'];
	$v4=$_POST['text5'];
	$v5=$_POST['text6'];
	$v6=$_POST['text7'];
	
	$v7=$_SESSION['accounttype'];
	
	$sqlvar="insert into 'CustAcTab' values($v1, '$v2', '$v3', '$v4', $v5, '$v6', '$v7', '$v7','N')";
	
	//$sqlvar="insert into CustAcTab(`acno`, `pword`, `acName`, `acAdd`, `MobileNo`, `email`, `actypename`, `custapp`) values($v1, '$v2', '$v3', '$v4', $v5, '$v6', '$v7', '$v7','N')";
	
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
else
{
	$_SESSION['accounttype']=$_GET['accounttype'];
	
}
?>
<form name=form1 method="post" action="customersignup.php">

<table width=40% border=1 cellspacing=$ cellpadding=$ align=center>
<tr><td colspan=2><h2>Customer Signup</h2></td></tr>
<tr><td>Account Number(10digit)</td><td><input type=text name=text1></td></tr>
<tr><td>Password</td><td><input type=password name=text2></td></tr>
<tr><td>Retype Password</td><td><input type=password name=text3></td></tr>
<tr><td>Person Name</td><td><input type=text name=text4></td></tr>
<tr><td>Address</td><td><textarea name=text5 rows=4></textarea></td></tr>
<tr><td>Mobile Number</td><td><input type=text name=text6></td></tr>
<tr><td>Email</td><td><input type=text name=text7></td></tr>
<tr><td><a href=mainpage.php>Back</a></td><td><input type=submit name=Login style="height:40px; width:175px"></td></tr>
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