<!DOCTYPE HTML>
<html>
<head>
<style>
table
	{
	border:2px solid #cc0000;
	border-radius:8px;
	margin-left:40%;
	margin-top:4%;
	}
td
	{
	padding:8px;
	}
button
	{
	background:#cc0000;
	padding:4px;
	border-radius:5px;
	color:white;
	cursor:pointer;
	font-size:20px;
	border-style:none;
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
$units=$_POST['units'];
$cost=$price*$units;
echo "<form action='calculator.php'>";
echo "<table>";
echo "<tr>";
echo "<td><h3>price per unit:</h3></td>";
echo "<td><h3>$price/-</h3></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h3>price for $units units:</h3></td>";
echo "<td><h3>$cost/-</h3></td>";
echo "</tr>";
echo "<td></td>";
echo "<td><button>ok</button></td>";
echo "</table>";
echo "</form>";
$conn->close();
}
?>
</head>
<body>
</body>
</html>
