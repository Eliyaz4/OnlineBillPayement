<!DOCTYPE HTML>
<html>
<head>
<style>
</style>
<?php
$conn=new mysqli("localhost","root","","billpayement");
if($conn->connect_error)
	{
	echo "connection failed:".$conn->connect_error;
	}
else
{
$user=$_POST['uname'];
$col=$_POST['col'];
$query="select * from user where username='$user'";
$result=mysqli_query($conn,$query);
$result=mysqli_fetch_array($result);
$i=0;
$j=0;
foreach($result as $a=>$b){
	if($i%2==1)
		{
		if($j==$col)
			{
			$need=$a;
			}
		$j++;
		}
$i++;
}
$query="update user set $need='paid' where username='$user'";
$res=mysqli_query($conn,$query);
if($res)
{
header("location:mybills.php");
}
else
{
}
$conn->close();
}
?>
</head>
<body>
</body>
</html>
