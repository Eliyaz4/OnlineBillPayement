<!DOCTYPE HTML>
<html>
<head>
<title>AdminMain</title>
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
#signout
	{
	position:absolute;
	margin-top:-4.4%;
	margin-left:91%;
	font-size:16px;
	cursor:pointer;
	color:white;
	background:blue;	
	padding:6px;
	border-style:none;
	border-radius:12px;
	}
td
	{
	background:blue;
	color:white;
	padding:10px;
	width:50%;
	text-align:center;
	}
table
	{
	margin-top:-0.7%;
	}
#content
	{
	border-style:none;	
	height:440px;
	width:100%;
	}
button
	{
	background:none;
	color:white;
	cursor:pointer;
	font-size:18px;
	border-style:none;
	}
</style>
<?php
session_start();
$uname=$_SESSION['u2'];
$passwd=$_SESSION['p2'];
if($uname==null and $passwd==null)
{
header("location:index.php");
}
?>
<script>
function myFunction1() 
	{
	document.getElementById("content").src = "user/mybills.php";
	}
function myFunction2() 
	{
	document.getElementById("content").src = "user/calculator.php";
	}
function myFunction3() 
	{
	document.getElementById("content").src = "user/feedback.php";
	}
</script>
</head>
<body>
<h1 id="title">ONLINE BILL PAYEMENT</h1>
<img src="img/logo.png" width="60px" height="60px" id="logo">
<form action="index.php">
<button id="signout">signout</button>
</form>
<hr>
<table>
<thead>
	<td><button onclick="myFunction1()">my bills</button></td>
	<td><button onclick="myFunction2()">calculator</button></td>
	<td><button onclick="myFunction3()">feedback</button></td>
</thead>
</table>
<iframe id="content" src="user/mybills.php"></iframe>
</body>
</html>
