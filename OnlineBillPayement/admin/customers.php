<!DOCTYPE HTML>
<html>
<head>
<style>
#tabl
	{
	border-radius:10px;
	margin-left:32%;
	margin-top:2%;
	}
td
	{
	text-align:center;
	font-size:20px;
	border:2px solid #cc0000;
	width:30%;	
	}
#th
	{
	background:#cc0000;
	color:white;
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
$query="select * from user";
$result=mysqli_query($conn,$query);
echo "<table id='tabl'>";
echo "<tr id='th'>";
echo "<td>servicenum</td>";
echo "<td>customer</td>";
echo "</tr>";
while($res=mysqli_fetch_array($result))
	{
	$temp1=$res['servicenum'];
	$temp2=$res['username'];
	echo "<tr>";
	echo "<td>$temp1</td>";
	echo "<td>$temp2</td>";
	echo "</tr>";
	}
echo "</table>";
$conn->close();
}
?>
</head>
<body>
</body>
</html>
