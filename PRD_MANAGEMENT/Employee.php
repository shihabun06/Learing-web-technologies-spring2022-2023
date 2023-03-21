<!DOCTYPE html>
<html>
<head>
	<center><title>Employee Information</title>
</head>
<body>
	<h1>Employee Information</h1>
	<form method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required><br><br>
		<label for="search"></label>
		<input type="submit" id="" name="" value="Search"><br><br>
		<?php
			
			if(isset($_POST['search'])) {
				
				$username = $_POST['username'];
				
				$employee_data = array('John Doe', 'Jane Smith', 'Bob Johnson');
				if(in_array($username, $employee_data)) {
					
					echo "<label>Employee Name:</label> $username<br>";
					echo "<button type='submit' name='delete' value='$username'>Delete</button>";
				} else {
					echo "Employee not found.";
				}
			}
		?>
		<button type="submit" name="finish">Delete</button>
        <button type="submit" name="Delete">Finish</button>
        
		<?php
			
			if(isset($_POST['delete'])) {
				
				$employee_name = $_POST['delete'];
				
				echo "<br>$employee_name has been deleted.";
			}
			
			if(isset($_POST['finish'])) {
				
				header("Location: another_page.php");
				exit();
			}
		?>
	</form>
</body>
</html>
