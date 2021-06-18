<!DOCTYPE HTML>
<html>
<head>
<style>
table
	{
	border:2px solid #cc0000;
	border-radius:8px;
	margin-left:40%;
	margin-top:4%;
	}
td
	{
	padding:8px;
	}
input
	{
	border-style:none;
	font-size:16px;
	border-bottom:2px solid #cc0000;
	}
button
	{
	background:#cc0000;
	padding:4px;
	border-radius:5px;
	color:white;
	cursor:pointer;
	font-size:15px;
	border-style:none;
	}
</style>
<?php
echo "<form action='calculatorexe.php' method='post'>";
echo "<table>";
echo "<tr><td><input type=text name=units placeholder='enter no.of units'></td></tr>";
echo "<tr><td><button>find price</button></td></tr>";
echo "</table>";
echo "</form>";
?>
</head>
<body>
</body>
</html>
