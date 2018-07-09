<html>
<head ><font color="red"></head>
<style>
form{
	border: 1px solid black;
	width:350px;
	color:black;
	background-color:#E6E6FA;
	border-radius:10px 10px;
}
#b0
{
	background-color: #000000;
	border:2px solid #4CAF50;
	padding:12px 28px;
	color:red;
	text-align:center;
	cursor: pointer;
	border-radius:10px 10px;
}
#b1
{
	background-color:#ff0000 ;
	border:2px solid white;
	padding:12px 24px;
	color:yellow;
	text-align:center;
	cursor: pointer;
	border-radius:10px 10px;
}
#b2
{
	background-color: #ffff00;
	border:2px solid white;
	padding:12px 26px;
	color:black;
	text-align:center;
	cursor: pointer;
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
 if(!empty($id)&&!empty($name)&&!empty($mark))
{
$sql=("update tbl_primary set Name='$name',mark=$mark where id=$id");
}
else if(!empty($id)&&!empty($name))
{
	$sql=("update tbl_primary set Name='$name' where id=$id");
}

else if(!empty($id)&&empty($name)&&!empty($mark))
{
	$sql=("update tbl_primary set mark=$mark where id=$id");
}
if (mysqli_query($conn,$sql)) {
    echo "<html><body><div></div><h style=color:'red'/>Record updated successfully.....</h></html>";
} else {
    echo "Error updating record: " . mysqli_error();
}
}

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Student_id 
<br></br>
<input type="number" name="id" required="true"/>
<span style=color:red>*required</span>
<br></br>
<label>Student_Name</label>
<br></br>
<input type="text" name="name"/>
<br></br>
<label>Student_mark</label>
<br></br>
<input type="text" name="mark"/>
<br></br>
<input type="submit" id="b0" value="VIEW  " onclick="location='tableread.php'"/>
<input type="submit" id="b1" value="SUBMIT" onclick="location='tableupdate.php'"/>
<input type="button" id="b2" onclick="location='Tableview.php'" value="HOME">
</form>
</body>