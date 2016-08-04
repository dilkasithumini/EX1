
<?php
	define('DB_NAME','mydb'); //Database name
	define('DB_USER','root');
	define('DB_PASSWORD','');
	define('DB_HOST','localhost');
	
	//connect to the database
	
	$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	
	if(!$link){
		die("Could not connect: ".mysql_error());
	}
	
	// select database to use
	
	$db_selected=mysql_select_db(DB_NAME,$link);
	
	if(!$db_selected){
		die("Can't use: ".DB_NAME.':'.mysql_error());
	}
	
	//echo("connected successfully..");
	
	if(isset($_POST['add'])){
	// define variables and set values
	$id=$_POST['id'];
	$name=$_POST['name'];
	$category=$_POST['category'];
	$address=$_POST['address'];
	$owner=$_POST['owner'];
	$contact=$_POST['contact'];
	
	// insert values to database
	$sql="INSERT INTO garage VALUES('$id','$name','$category','$address','$owner','$contact') ";
	
	if(!mysql_query($sql)){
		die("Error: ".mysql_error());
	}
	//mysql_close();
	}
	$res=mysql_query("SELECT * FROM garage");

?>

<h1>ADD GARAGE DETAILS</h1>
<form action="add.php" method="post">
<table border="0">
	<tr>
		<td>ID:</td>
		<td><input type="text" name="id"></td>
	</tr>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>Category:</td>
		<td><input type="radio" name="category" value="service"> Service
		    <input type="radio" name="category" value="repair"> Repair</td>
	</tr>
	<tr>
		<td>Address:</td>
		<td><textarea name="address" rows="5" ></textarea></td>
	</tr>
	<tr>
		<td>Owner_Name: </td>
		<td><input type="text" name="owner"></td>
	</tr>
	<tr>
		<td>Contact Number :</td>
		<td><input type="text" name="contact"></td>
	</tr>
	
</table>	
<input type="Submit" value="ADD" name="add">

</form>

