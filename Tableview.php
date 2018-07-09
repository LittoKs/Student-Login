<?php
?>
<html>
<head style=color"blue"> <h1 > StudentDetails</h1> </head>
<?php
$username="root";
$password="";
$servername="localhost";
$dbname="student";
$table="";

$con =mysqli_connect($servername,$username,$password,$dbname);

if(!$con)
{
	die(mysqli_connect_error());
}
$sql="SELECT * FROM tbl_primary";
$res=$con->query($sql);

echo "<html><style>table, th, td {
    border: 1px solid black;
}


</style><body><table>
  
    <col span=\"1\" style=\"background-color:#74ACDF\" width=\"200px\">
	<col span=\"1\" style=\"background-color:#FFFFFF\" width=\"100px\">
    <col style=\"background-color:#74ACDF\" width=\"200px\">
  
	<tr>
	<th>ID </th>
    <th>NAME  </th>
	<th>MARK</th>
	</tr>";
while($row=$res->fetch_assoc())
{
	$id=$row['id'];
	$name=$row['Name'];
	$mark=$row['mark'];
	
	echo "<html><body><table>
	<col span=\"1\" style=\"background-color:#74ACDF\" width=\"200px\">
	<col span=\"1\" style=\"background-color:#FFFFFF\" width=\"100px\">
    <col style=\"background-color:#74ACDF\" width=\"200px\">
	<tr >
	<td align=\"center\">$id</td>
	<td align=\"left\">$name</td>
	<td align=\"center\">$mark</td>
	</tr>
	</table></body></html>";
}
?>

<script>
function a()
{
	document.getElementById("update1").disabled=true;
	document.getElementById("delete1").disabled=true;
	document.getElementById("b1").disabled=false;
	var x=document.getElementById("b3");
	var y=document.getElementById("b4");
	document.getElementById("b1").hidden="";
	x.style.display="none"
	y.style.display="none"
	
	
	
	
}
function b()
{
	document.getElementById("update1").disabled=true;
	document.getElementById("read1").disabled=true;
	document.getElementById("b3").disabled=false;
	document.getElementById("b3").hidden="";
	var x=document.getElementById("b1");
	var y=document.getElementById("b4");
	x.style.display="none"
	y.style.display="none"
	
}
function c()
{
	document.getElementById("read1").disabled=true;
	document.getElementById("delete1").disabled=true;
	document.getElementById("b4").disabled=false;
	document.getElementById("b4").hidden="";
	var x=document.getElementById("b3");
	var y=document.getElementById("b1");
	x.style.display="none"
	y.style.display="none"
	
}
</script>
<style>
#b1{
	background-color:#d90012;
	border:2px solid gray;
	text-align:center;
	color:#FFDE00;
	padding :10px 24px;
	cursor:pointer;
	border-radius: 10px 10px ;
	
}
#b3{
	background-color:#0033a0;
	border:2px solid gray;
	text-align:center;
	color:white;
	padding :10px 24px;
	cursor:pointer;
	border-radius: 10px 10px ;
	
}
#b4{
	background-color:#f2a800.;
	border:2px solid gray;
	text-align:center;
	color:red;
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
	border-radius: 10px 10px ;
	
}
input[type="checkbox"]
{
	height:25px;
	width:30px;
	
	background-color:gray;
	cursor:pointer;
	
	position: relative;
	
}
</style>
<form id="f3" Method="GET" action="<?php echo "_REQUEST['PHP_SELF']; "?>"/>
<input type="checkbox" id="delete1" name="table" onclick="b()" value="delete"/>Delete
<input type="checkbox" id="update1" name="table" onclick="c()" value="update"/>   Edit
<input type="checkbox" id="read1" name="table" onclick="a()"  value="Read"/>    Read
<br>
<br>
<input type="button" id="b1"   " name="Go"  disabled="disabled"  onclick="location='tableread.php'" value="       GO       ">     
<input type="button" id="b3"   " name="Go"  disabled="disabled" hidden="hidden" onclick="location='tabledelete.php'" value="       GO       "> 
<input type="button" id="b4"   " name="Go" disabled="disabled" hidden="hidden" onclick="location='tableupdate.php'" value="       GO       ">  
<input type="button"  id="b2" onclick="location='form_create.php'"  name="Go"  value=" REGISTER ">

</form>
</body>
</html>

<?php

?>