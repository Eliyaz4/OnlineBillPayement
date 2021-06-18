<!DOCTYPE HTML>
<html>
<head>
<style>
#tabl
	{
	border:2px solid #cc0000;
	padding:25px;
	border-radius:10px;
	margin-left:32%;
	margin-top:2%;
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
	border:none;
	cursor:pointer;
	color:white;
	border-radius:12px;
	}
</style>
<script>
function valid()
	{
	var x=document.getElementById("pass").value;
	var y=document.getElementById("cpass").value;
	if(x!=y)
		{
		window.alert("password doesn't match");
		return false;
		}
	}
</script>
</head>
<body>
<form action="regvalid.php" onsubmit="return valid()" method="post">
<table id="tabl">
<tr>
<td id="un">servicenum:</td>
<td><input name="servicenum" type="text" pattern=[0-9]{} required></td>
</tr>
<tr>
<td id="un">username:</td>
<td><input name="uname" type="text" required></td>
</tr>
<tr>
<td id="un">password:</td>
<td><input name="passwd" type="password" id="pass" required></td>
</tr>
<tr>
<td id="un">confirmpassword:</td>
<td><input name="cpasswd" type="password" id="cpass" required></td>
</tr>
<tr>
<td></td>
<td><button>signup</button></td>
</tr>
</table>
</form>
</body>
</html>
