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
$price=mysqli_fetch_array($result);
$price=$price['price'];
$query="select * from user";
$result=mysqli_query($conn,$query);
if($result)
	{
	$col=$_POST['col'];
	$col2=$_POST['col2'];
	while($res=mysqli_fetch_array($result))
		{
		$ser=$res['servicenum'];
		$data=$_POST[$ser];
		$query="update user set $col=$data where servicenum=$ser";
		mysqli_query($conn,$query);
		$query="update user set $col2=$data*$price where servicenum=$ser";
		mysqli_query($conn,$query);
		echo $ser;
		}
	echo "bill added to users successfully";
	}
$conn->close();
}
?>
