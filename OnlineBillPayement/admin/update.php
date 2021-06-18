<!DOCTYPE HTML>
<html>
<head>
<style>
</style>
<?php
$price=$_POST['price'];
$conn=new mysqli("localhost","root","","billpayement");
if($conn->connect_error)
	{
	echo "connection failed:".$conn->connect_error;
	}
else
{
$query="update price set price=$price where id=1";
$res=mysqli_query($conn,$query);
if($res)
	{
	header("location:updatecost.php");
	}
$conn->close();
}
?>
</head>
<body>
</body>
</html>
