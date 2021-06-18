<!DOCTYPE HTML>
<html>
<head>
<style>
table
	{
	border-radius:10px;
	position:absolute;
	margin-top:-30px;
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
	padding:6px;
	border-radius:5px;
	border:none;
	cursor:pointer;
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
$query="select * from feedback";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
{
echo "<table>";
echo "<tr id='th'>";
echo "<td><b>username</b></td>";
echo "<td><b>feedback</b></td>";
echo "<td><b>delete</b></td>";
echo "</tr>";
while($res=mysqli_fetch_array($result))
	{
	$username=$res['username'];
	$feedback=$res['feedback'];
	echo "<tr>";
	echo "<td>$username</td>";
	echo "<td>$feedback</td>";
	echo "<form action='delete.php' method='post'>";
	echo "<td><button>delete</button></td>";
	echo "</tr>";
	echo "<input type='text' name='uname' value=$username style='visibility:hidden;'>";
	echo "</form>";
	}
echo "</table>";
}
else
{
echo "no feedbacks received";
}
$conn->close();
}
?>
</head>
<body>
</body>
</html>
