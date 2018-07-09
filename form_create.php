<?php

?>
<head ><font color="green"><h1>Registration page</h1></head>
<style>
form{
	border: 1px solid black;
	width:350px;
	height:315px;
	color:white;
	background-color:gray;
	border-radius:10px 10px;
}
#b0
{
	background-color: #d34836;
	border:2px solid E6E6FA;
	padding:12px 28px;
	color:white;
	text-align:center;
	cursor: pointer;
	border-radius:10px 10px;
}
#b1
{
	background-color:#2d2d2d ;
	border:2px solid E6E6FA;
	padding:12px 24px;
	color:white;
	text-align:center;
	cursor: pointer;
	border-radius:10px 10px;
	position:bottom;
}
#b2
{
	background-color: #d2d2d2;
	border:2px solid E6E6FA;
	padding:12px 26px;
	color:white;
	text-align:center;
	cursor: pointer;
	border-radius:10px 10px;
}
</style>

<body>
<form action="Tablecreate.php" method="POST">
Student_id 
<br></br>
<input type="number" name="id" required=true oninvalid="this.setCustomervalid='id is required'">
<br></br>
<label>Student_Name</label>
<br></br>
<input type="text" name="name" required=true oninvalid="this.setCustomervalid='name is required'"/>
<br></br>
<label>Student_mark</label>
<br></br>
<input type="text" name="mark" required=true oninvalid="this.setCustomervalid='mark is required'"/>
<br></br>
<br></br>
<input type="submit" id="b0" value="VIEW  " onclick="location='tableread.php'"/>
<input type="submit" id="b1" value="SUBMIT"/>
<input type="button" id="b2" onclick="location='Tableview.php'" value="HOME">

</form>
</body>

