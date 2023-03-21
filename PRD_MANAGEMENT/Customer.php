<!DOCTYPE html>
<html>
<head>
	<center><title>Customer Information</title>
</head>
<body>
	<h1>Customer Information</h1>
	<form method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required><br><br>
		<label for="search"></label>
		<input type="submit" id="" name="" value="Search"><br><br>
		<?php
			
			if(isset($_POST['search'])) {
				
				$username = $_POST['username'];
				
				$Customer_data = array('John Doe', 'Jane Smith', 'Bob Johnson');
				if(in_array($username, $Customer_data)) {
					
					echo "<label>Customer Name:</label> $username<br>";
					echo "<button type='submit' name='delete' value='$username'>Delete</button>";
				} else {
					echo "Customer not found.";
				}
			}
		?>
		<button type="submit" name="finish">Delete</button>
        <button type="submit" name="Delete">Finish</button>
        
		<?php
			
			if(isset($_POST['delete'])) {
				
				$Customer_name = $_POST['delete'];
				
				echo "<br>$Customer_name has been deleted.";
			}
			
			if(isset($_POST['finish'])) {
				
				header("Location: another_page.php");
				exit();
			}
		?>
	</form>
</body>
</html>
