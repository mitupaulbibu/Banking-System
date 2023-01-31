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
echo(date('Y/m/d'));
if($_SERVER['REQUEST_METHOD']=='POST')
{
	
	$v1=$_POST['text1'];
	$v2=$_POST['text2'];
	$v3=$_POST['text3'];
	
	$nvar=1001;
	$sqlvar="select max(tranno)+1 from tranTab";
	$result=$conn ->query($sqlvar);
	if($row=$result->fetch_row())
	{
		$nvar=$row[0];
	}
	if($nvar===null){$nvar=1001;}
	
	$d1=date('Y/m/d');
	
	$sqlvar="insert into tranTab values($nvar, '$d1', $v1, $v2, 0, '$v3')";
	echo($sqlvar);
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
<form name=form1 method="post" action="custtransfer.php">

<table width=40% border=1 cellspacing=$ cellpadding=$ align=center>
<tr><td colspan=2><h2>Transfer Money</h2></td></tr>
<tr><td>Account Number</td><td><input type=text name=text1></td></tr>
<tr><td>Amount</td><td><input type=text name=text2></td></tr>
<tr><td>Account Details</td><td><input type=text name=text3></td></tr>
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