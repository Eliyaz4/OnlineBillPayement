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
$query="select price from price where id=1";
$result=mysqli_query($conn,$query);
$res=mysqli_fetch_array($result);
$price=$res['price'];
echo "<table>";
echo "<tr>";
echo "<td><h3>previous price:</h3></td>";
echo "<td><h3>$price/-</h3></td>";
echo "</tr>";
echo "<tr>";
echo "<form action='update.php' method='post'>";
echo "<td><input type='int' name='price' required></td>";
echo "<td><button>update</button></td>";
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
