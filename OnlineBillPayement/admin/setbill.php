<!DOCTYPE HTML>
<html>
<head>
<style>
table
	{
	border-radius:10px;
	margin-left:2%;
	margin-top:0px;
	position:absolute;
	}
td
	{
	text-align:center;
	font-size:20px;
	border:2px solid #cc0000;
	width:20%;	
	}
#th
	{
	background:#cc0000;
	color:white;
	}
button
	{
	background:blue;
	padding:4px;
	border-radius:5px;
	color:white;
	cursor:pointer;
	font-size:15px;
	border-style:none;
	}
#del
	{
	border:none;
	}
#upload
	{
	padding:12px;
	font-size:18px;
	width:220px;
	}
</style>
<?php
$add=$_POST['add'];
$conn=new mysqli("localhost","root","","billpayement");
if($conn->connect_error)
	{
	echo "connection failed:".$conn->connect_error;
	}
else
{
$query="alter table user add column $add int(5) default 0";
$result=mysqli_query($conn,$query);
$col=$add."_amount";
$query="alter table user add column $col int(15) default 0";
$result=mysqli_query($conn,$query);
$col2=$add."_status";
$query="alter table user add column $col2 varchar(6) default 'unpaid'";
$result=mysqli_query($conn,$query);
$query="select * from user";
$result=mysqli_query($conn,$query);
if($result)
{
echo "<table>";
echo "<tr id='th'>";
echo "<td>servicenum</td>";
echo "<td>customer</td>";
echo "<td>$add</td>";
echo "</tr>";
echo "<form action='setbillexe.php' method='post'>";
echo "<input type='text' name='col' style='visibility:hidden;' value=$add>";
echo "<input type='text' name='col2' style='visibility:hidden;' value=$col>";
while($res=mysqli_fetch_array($result))
	{
	$temp1=$res['servicenum'];
	$temp2=$res['username'];
	echo "<tr>";
	echo "<td>$temp1</td>";
	echo "<td>$temp2</td>";
	echo "<td><input type='number' name='$temp1' required></td>";
	echo "</tr>";
	}
echo "<tr><td id='del'></td><td id='del'></td><td id='del'><button id='upload'>set bill</button></td></tr>";
echo "</form>"; 
echo "</table>";
}
else
{
echo "unsuccessful";
}
$conn->close();
}
?>
</head>
<body>
</body>
</html>
