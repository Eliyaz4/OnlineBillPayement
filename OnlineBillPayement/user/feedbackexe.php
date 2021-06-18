<!DOCTYPE HTML>
<html>
<head>
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
$fback=$_POST['fback'];
$ran=mt_rand(1000,9999);
$user=$user.$ran;
$query="insert into feedback(username,feedback) values('$user','$fback')";
$result=mysqli_query($conn,$query);
if($result)
	{
	echo "sent feedback succesfully";
	}
else
	{
	echo "failed to send feedback try again!";
	}
$conn->close();
}
?>
</head>
<body>
</body>
</html>
