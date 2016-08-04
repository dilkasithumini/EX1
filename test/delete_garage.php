<?php 
	$link=mysql_connect("localhost","root","") or die("Not connected..".mysql_error());
	$db=mysql_select_db('mydb',$link) or die("DB Connection error..".mysql_error());

	$id=$_POST['id'];
	

	$query = "Delete from garage where id='$id'";

	if($result  = mysql_query($query) or die("SQL Error".mysql_error())){
		echo("Deleted.");
	}
	else{
		echo("Failed..");
	}
?>