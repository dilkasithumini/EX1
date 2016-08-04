<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<h1>View All Garages & Service Stations</h1>

	<?php 
		$link=mysql_connect("localhost","root","") or die("Not connected..".mysql_error());
		$db=mysql_select_db('mydb',$link) or die("DB Connection error..".mysql_error());

		$query = "select * from garage";

		$result  = mysql_query($query) or die("SQL Error".mysql_error());
	?>
	<table style="width:40%" border="1px">

		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Category</th>
			<th>Address</th>
			<th>Owner</th>
			<th>Contact No</th>
			<th>Access</th>
		</tr>
	  	<?php while($row = mysql_fetch_assoc($result)){ ?>
	    <tr>
	        <td><?php echo $row['id']; ?></td>
	        <td><?php echo $row['name']; ?></td>
	        <td><?php echo $row['category']; ?></td>
	        <td><?php echo $row['address']; ?></td>
	        <td><?php echo $row['owner']; ?></td>
	        <td><?php echo $row['contact']; ?></td>
	    </tr>
    <?php } ?>
	</table>

	</body>
</html>

