<html>
<body>
<style>
form{
	border: 1px solid black;
	width:500px;
	height:70px;
	color:black;
	background-color:#C0C0C0;
	border-radius:10px 10px;
}
#b0
{
	background-color: #000000;
	border:2px solid white;
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
	position:bottom;
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

<?php
session_start();
require("configure.php");
$_SERVER['conn']=$conn;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
if(!empty($_POST['id']))

{
	$id=$_POST['id'];
	$sql=("delete from tbl_primary where id=$id");
if ($conn->query($sql) === TRUE) {
    echo "<html><style>#l{color:'red';}</style><body ><div ></div><h id='l'> Data removed successfully.....</h></body></html>";
}
 else 
{
    echo "Error updating record: " . $conn->error;
}
}
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Student_id 
<br>
<input type="number" name="id" >
<span style=color:red>*</span>
<input type="submit" id="b0" value="VIEW  " onclick="location='tableread.php'"/>
<input type="submit" id="b1" value="SUBMIT"/>
<input type="button" id="b2" onclick="location='Tableview.php'" value="HOME">

</form>
</body>


