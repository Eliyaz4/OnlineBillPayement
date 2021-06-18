<!DOCTYPE HTML>
<html>
<head>
<title>AdminLogin</title>
<style>
#title
	{
	color:#b3330c;
	margin-left:26%;
	margin-top:1.5%;
	}
#logo
	{
	margin-top:-5%;
	position:absolute;
	margin-left:60%;
	}
#tabl
	{
	border:2px solid #b3330c;
	padding:25px;
	border-radius:10px;
	margin-left:32%;
	margin-top:8%;
	}
#un
	{
	font-size:20px;
	margin-top:30px;
	}
input
	{
	border-style:none;
	border-bottom:2px solid #cc0000;
	width:200px;
	font-size:20px;
	}
tr
	{
	height:52px;
	}
button
	{
	background:#cc0000;
	padding:6px;
	color:white;
	border:none;
	cursor:pointer;
	}
</style>
<?php
$uname=$_POST['uname'];
$passwd=$_POST['passwd'];
session_start();
$_SESSION['u1']=$_POST['uname'];
$_SESSION['p1']=$_POST['passwd'];
if($uname!=null and $passwd!=null)
{
$conn=new mysqli('localhost','root','','billpayement');
if($conn->connect_error)
	{
	echo "database connection failed".$conn->connect_error;
	}
else
{
$query="select username from admin where username='$uname'";
$result=mysqli_num_rows(mysqli_query($conn,$query));
if($result)
	{
	$query="select password from admin where password='$passwd' and username='$uname'";
	$result=mysqli_num_rows(mysqli_query($conn,$query));
	if($result)
		{
		header("location:admin.php");	
		}
	else
		{
		echo "<script>window.alert('invalid details')</script>";
		}
	}
else
	{
	echo "<script>window.alert('invalid details')</script>";
	}
$conn->close();
}
}
?>
</head>
<body>
<h1 id="title">ONLINE BILL PAYEMENT</h1>
<img src="img/logo.png" width="60px" height="60px" id="logo">
<hr>
<form action="" method="post">
<table id="tabl">
<tr>
<td id="un">username:</td>
<td><input name="uname" type="text" id="inpt"></td>
</tr>
<tr>
<td id="un">password:</td>
<td><input name="passwd" type="password" id="passwd"></td>
</tr>
<tr>
<td></td>
<td><button>login</button></td>
</tr>
</table>
</form>
</body>
</html>
