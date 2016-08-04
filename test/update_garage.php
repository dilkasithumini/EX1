<?php 
	$link=mysql_connect("localhost","root","") or die("Not connected..".mysql_error());
	$db=mysql_select_db('mydb',$link) or die("DB Connection error..".mysql_error());

	$id=$_POST['id'];
	$name=$_POST['name'];
	$category=$_POST['category'];
	$address=$_POST['address'];
	$owner=$_POST['owner'];
	$contact=$_POST['contact'];

	$query = "UPDATE garage SET ID='$id',Name='$name',Category='$category',Address='$address',Owner='$contact' WHERE ID='$id'";

	if($result  = mysql_query($query) or die("SQL Error".mysql_error())){
		echo("Updated.");
	}
	else{
		echo("Failed to Update");
	}
?>