
		<form name="searchGarage" action="search_delete.php" method="post" >
			<h1>Search Garage</h1>
			<label>Enter ID :</label>	
			<input type="text" name="id" >
			<br><br>

			<input type="submit" value="Search">
			<input type="reset" value="Clear">
			<br><br>

		</form>
	

		<?php 
			$link=mysql_connect("localhost","root","") or die("Not connected..".mysql_error());
			$db=mysql_select_db('mydb',$link) or die("DB Connection error..".mysql_error());

			$id = $_POST['id'];

			$query = "select * from garage where id='$id'";

			$result  = mysql_query($query) or die("SQL Error".mysql_error());

			$row = mysql_fetch_assoc($result);
		?>
		<form name="addGarage" action="delete_garage.php" method="post" >
			<h1>Delete Garage</h1>

			<table border="0">
				<tr>
					<td>ID:</td>
					<td><input type="text" name="id" value="<?php echo $row['id']; ?>" readonly></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="<?php echo $row['name']; ?>" readonly></td>
				</tr>
				<tr>
					<?php if($row['category']=="service"){ ?>
					<td>Category:</td>
					<td><input type="radio" name="category" value="service" checked readonly> Service
						<input type="radio" name="category" value="repair" readonly> Repair</td>
					<?php } ?>
					
					<?php if($row['category']=="repair"){ ?>
					<td>Category:</td>
					<td><input type="radio" name="category" value="service" readonly> Service
						<input type="radio" name="category" value="repair" checked readonly> Repair</td>
					<?php } ?>
				</tr>
				<tr>
					<td>Address:</td>
					<td><textarea name="address" rows="5" value="<?php echo $row['address']; ?>" readonly></textarea></td>
				</tr>
				<tr>
					<td>Owner_Name: </td>
					<td><input type="text" name="owner" value="<?php echo $row['owner']; ?>" readonly></td>
				</tr>
				<tr>
					<td>Contact Number :</td>
					<td><input type="text" name="contact" value="<?php echo $row['contact']; ?>" readonly></td>
				</tr>
	
</table>
			<input type="submit" value="Delete">
			<br><br>

		</form>
