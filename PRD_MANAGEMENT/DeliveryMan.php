<!DOCTYPE html>
<html>
<head>
	<center><title>Delivery man Information</title>
</head>
<body>
	<h1>Delivery man Information</h1>
	<form method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required><br><br>
		<label for="search"></label>
		<input type="submit" id="" name="" value="Search"><br><br>
		<?php
			
			if(isset($_POST['search'])) {
				
				$username = $_POST['username'];
				
				$Deliver_man_data = array('abc', 'def', 'ghi');
				if(in_array($username, $Delivery_man_data)) {
					
					echo "<label>Delivery_man Name:</label> $username<br>";
					echo "<button type='submit' name='delete' value='$username'>Delete</button>";
				} else {
					echo "Delivery man not found.";
				}
			}
		?>
		<button type="submit" name="finish">Delete</button>
        <button type="submit" name="Delete">Finish</button>
        
		<?php
			
			if(isset($_POST['delete'])) {
				
				$employee_name = $_POST['delete'];
				
				echo "<br>$Delivery man name has been deleted.";
			}
			
			if(isset($_POST['finish'])) {
				
				header("Location: another_page.php");
				exit();
			}
		?>
	</form>
</body>
</html>
