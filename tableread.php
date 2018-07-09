<html>
<style>
#b1{
	background-color:#4AADD6;
	border:2px solid gray;
	text-align:center;
	color:#FFDE00;
	padding :10px 24px;
	cursor:pointer;
	border-radius:10px 10px;
	
}
#b2{
	background-color:#FFDE00;
	border:2px solid gray;
	text-align:center;
	color:#4AADD6;
	padding :10px 24px;
	cursor: pointer;
	border-radius:10px 10px;
	
}
form{
	background-color:gray;
	width:360px;
	
}
</style>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="number" placeholder="Enter ID" name="id" required=true oninvalid="this.setCustomValidity('enter id')"/>
<input type="submit" id="b1" value=" VIEW " width="100px">
<input type="button" id="b2" onclick="location='Tableview.php'" value="HOME">
</form>
<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="student";
$err="error";
$id=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
$id=$_REQUEST['id'];
if(empty($id))
{
	echo "empty";
}

}

$con=mysqli_connect($servername,$username,$pass,$dbname);
$sql="select * from tbl_primary where id=\"$id\"";
$result=$con->query($sql);
if($row=$result->fetch_assoc())
{
	$sid=$row['id'];
	$name=$row['Name'];
	$mark=$row['mark'];
	echo "<html>
	<body>
	<style>
	table,th,td
	{
		border:1px solid black;
	}
	</style>
	<table>
	<col span=\"1\" style=\"background-color:#009B3A\" width=\"300px\">
	<col span=\"1\" style=\"background-color:#FEDF00\" width=\"150px\">
    <col style=\"background-color:#002776\" width=\"300px\">
	<tr>
	<th><font color=\"red\"/>ID</th>
	<th><font color=\"red\"/>Name</th>
	<th><font color=\"red\"/>Mark</th>
	</tr>
	<tr>
	<td align=\"center\"><font color=\"white\"/>$sid</td>
	<td align=\"center\"><font color=\"white\"/>$name</td>
	<td align=\"center\" color:\"white\"><font color=\"white\"/>$mark</td>
	</tr>";
}
?>
</body>
</html>
