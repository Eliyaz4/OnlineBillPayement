<!DOCTYPE HTML>
<html>
<head>
<style>
input
	{
	border-style:none;
	width:120px;
	border-bottom:2px solid #cc0000;
	}
button
	{
	background:#cc0000;
	color:white;
	padding:6px;
	border-radius:5px;
	border:none;
	cursor:pointer;
	}
td
	{
	padding:10px;
	font-size:18px;
	}
table
	{
	border:2px solid #cc0000;
	margin-top:3%;
	border-radius:15px;
	margin-left:38%;
	}
</style>
<?php
$conn=new mysqli("localhost","root","","billpayement");
if($conn->connect_error)
	{
	echo "connection failed:".$conn->connect_error;
	}
else
{
echo "<table>";
echo "<tr>";
echo "<td><b>pattern:jan_2019</b></td>";
echo "</tr>";
echo "<tr>";
echo "<form action='setbill.php' method='post'>";
echo "<td><input type='text' placeholder='month_year' name='add' required></td>";
echo "<td><button>add</button></td>";
echo "</form>";
echo "</tr>";
echo "</table>";
$conn->close();
}
?>
</head>
<body>
</body>
</html>
