<!DOCTYPE HTML>
<html>
<head>
<style>
</style>
<?php
$user=$_POST['uname'];
echo "are you sure want to delete feedback?"."<br>";
echo "<form action='deleteexe.php' method='post'>";
echo "<input type='text' name='uname' value=$user style='visibility:hidden;'>";
echo "<br><button>yes</button>";
echo "</form>";
echo "<form action='feedback.php'>";
echo "<br><button>no</button>";
echo "</form>";
?>
</head>
<body>
</body>
</html>
