<!DOCTYPE HTML>
<html>
<head>
<style>
#box
	{
	border:2px solid #cc0000;
	border-radius:8px;
	margin-top:1%;
	margin-left:30%;
	}
button
	{
	background:#cc0000;
	padding:4px;
	border-radius:5px;
	color:white;
	margin-left:44%;
	cursor:pointer;
	font-size:18px;
	border-style:none;
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
echo "<form action='feedbackexe.php' method='post'>";
echo "<textarea id='box' name='fback' rows='10' placeholder='enter your feedback' cols='60'required></textarea><br><br>";
echo "<button>send</button>";
echo "</form>"; 
$conn->close();
}
?>
</head>
<body>
</body>
</html>
