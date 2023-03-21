<!DOCTYPE html>
<html>
<head>
	<title>Payment Control Panel</title>
</head>
<body>
	  <center><h1>Payment Control Panel</h1>
	
	
	
	<form action="" method="POST">
		<label for="employee_name">Employee Name:</label>
		<input type="text" id="employee_name" name="employee_name" required><br><br>
		
		<label for="salary_amount">Salary Amount:</label>
		<input type="number" id="salary_amount" name="salary_amount" required><br><br>
		
		<input type="submit" name="add_salary" value="Add Salary">
	</form>
    <?php
			
			if(isset($_POST['add_salary'])) {
				// Get values from form
				$employee_name = $_POST['employee_name'];
				$salary_amount = $_POST['salary_amount'];
				
				
            }	
		?>
		
	</table>
</body>
</html>