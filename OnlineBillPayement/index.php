<!DOCTYPE HTML>
<html>
<head>
<title>Online Bill Payement</title>
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
#admin
	{
	margin-left:26%;
	margin-top:8%;
	position:absolute;
	cursor:pointer;
	}
#user
	{
	margin-left:48%;
	margin-top:8%;
	position:absolute;
	cursor:pointer;
	}
hr
	{
	margin-top:-1%;
	}
</style>
<?php
session_start();
$_SESSION['u1']=null;
$_SESSION['p1']=null;
$_SESSION['u2']=null;
$_SESSION['p2']=null;
?>
</head>
<body>
<h1 id="title">ONLINE BILL PAYEMENT</h1>
<img src="img/logo.png" width="60px" height="60px" id="logo">
<a href="adminlogin.php" target="_self"><img src="img/admin.png" width="250px" height="250px" id="admin"></a><br>
<a href="userlogin.php" target="_self"><img src="img/user.png" width="190px" height="190px" id="user"></a>
<hr>
</body>
</html>
