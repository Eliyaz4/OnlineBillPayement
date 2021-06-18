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
echo "<form action='payexe.php' method='post'>";
echo "<input type='text' placeholder='enter card number' required pattern=[0-9]{16}><br>";
echo "<input type='text' placeholder='cvv code' required pattern=[0-9]{3}><br>";
echo "<input type='text' placeholder='expire data' required pattern=[0-9,/]{5}><br>";
echo "<input type='text' name='uname' value=$user style='visibility:hidden;'>";
echo "<input type='text' name='col' value=$col style='visibility:hidden;'>";
echo "<button>pay</button>";
echo "</form>";
$conn->close();
}
?>
</head>
<body>
</body>
</html>
