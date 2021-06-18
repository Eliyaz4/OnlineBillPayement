<?php
$servicenum=$_POST['servicenum'];
$user=$_POST['uname'];
$password=$_POST['passwd'];
$conn=new mysqli("localhost","root","","billpayement");
if($conn->connect_error)
	{
	echo "connection failed:".$conn->connect_error;
	}
else
{
$query="select * from user where servicenum='$servicenum' or username='$user'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==0)
	{
	$query="insert into user(servicenum,username,password) values('$servicenum','$user','$password')";
	$result=mysqli_query($conn,$query);
	}
else
	{
	echo "<script>window.alert('you have account already')</script>";
	}
$conn->close();
}
?>
