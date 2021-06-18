<!DOCTYPE HTML>
<html>
<head>
<style>
table
	{
	border-radius:10px;
	position:relative;
	margin-left:20px;
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
button
	{
	background:#cc0000;
	color:white;
	padding:4px;
	font-size:18px;
	border-radius:5px;
	border:none;
	cursor:pointer;
	}
#paid
	{
	color:green;
	padding:4px;
	font-size:18px;
	}
#hide
	{
	border:none;
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
session_start();
$user=$_SESSION['u2'];
$query="select * from user where username='$user'";
$result=mysqli_query($conn,$query);
$colcount=mysqli_num_fields($result);
if(mysqli_num_rows($result)>0)
{
echo "<table>";
echo "<tr id='th'>";
echo "<td><b>username</b></td>";
echo "<td><b>servicenum</b></td>";
echo "<td><b>units</b></td>";
echo "<td><b>amount</b></td>";
echo "<td><b>status</b></td>";
echo "</tr>";
$res=mysqli_fetch_array($result);
$username=$res['username'];
$servicenum=$res['servicenum'];
for($i=3;$i<$colcount;)
	{
	$j=$i;
	$x=$res[$j];
	$j++;
	$y=$res[$j];
	$j++;
	$z=$res[$j];
	echo "<tr>";
	echo "<td >$username</td>";
	echo "<td>$servicenum</td>";
	echo "<td>$x</td>";
	echo "<td>$y</td>";
	if($z=="unpaid")
		{
		echo "<form action='pay.php' method='post'>";
		echo "<td><button>pay</button></td>";
		echo "<td id='hide'><input type='text' name='uname' value=$username style='visibility:hidden;width:0px;'></td>";
		echo "<td id='hide'><input type='text' name='col' value=$j style='visibility:hidden;width:0px;'></td>";
		echo "</form>";
		}
	else
		{
		echo "<td id='paid'>paid</td>";
		echo "</tr>";
		}
	$i=$i+3;
	}
echo "</table>";
}
else
{
echo "no bills";
}
$conn->close();
}
?>
</head>
<body>
</body>
</html>
