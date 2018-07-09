<html>
<style>
#but{
	background-color:#4AADD6;
	border:2px solid gray;
	text-align:center;
	color:#FFDE00;
	padding:10px 24px;
	cursor:pointer;
	border-radius:10px 10px;
	
}
</style>
<body>
<?php
session_start();
require("configure.php");

$_SESSION['conn']=$conn;


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$mark=$_POST['mark'];
	
}

$sql = "INSERT INTO tbl_primary (id,Name,mark)
VALUES ($id,'$name',$mark)";

if(mysqli_query($conn,$sql)==true)
	{
		echo "<html><body><font color='red'/>The data is successfully inserted........</body></html>";
	}
	else
	{
		echo "insertion failed";
	}
?>
<br>
<input type="button" id="but" value="   HOME   " onclick="location='Tableview.php'">
<input type="button" id="but" value="REGISTER" onclick="location='form_create.php'">
</body>
</html>