<?php
$user=$_POST['uname'];
$conn=new mysqli("localhost","root","","billpayement");
if($conn->connect_error)
	{
	echo "connection failed:".$conn->connect_error;
	}
else
{
$query="delete from feedback where username='$user'";
$result=mysqli_query($conn,$query);
if($result)
	{
	header("location:feedback.php");
	}
else
	{
	echo "deleted failed try again";
	}
$conn->close();
}
?>
