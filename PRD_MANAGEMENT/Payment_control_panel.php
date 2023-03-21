<!DOCTYPE html>
<html>
<head>
	<title>Payment Control Panel</title>
</head>
<body>
	  <center><h1>Payment Control Panel</h1>
	
	
	<h2>Add Salary</h2>
	<form action="" method="POST">
		<label for="employee_name">Employee Name:</label>
		<input type="text" id="employee_name" name="employee_name" required><br><br>
		
		<label for="salary_amount">Salary Amount:</label>
		<input type="number" id="salary_amount" name="salary_amount" required><br><br>
		
		<input type="submit" name="add_salary" value="Add Salary">
	</form>
	
	
	<h2>Salary History</h2>
	<table border="1">
		<tr>
			<th>Employee Name</th>
			<th>Salary Amount</th>
			<th>Date Added</th>
		</tr>
		
		<?php
			
			if(isset($_POST['add_salary'])) {
				// Get values from form
				$employee_name = $_POST['employee_name'];
				$salary_amount = $_POST['salary_amount'];
				
				
				echo "<tr>";
				echo "<td>".$employee_name."</td>";
				echo "<td>".$salary_amount."</td>";
				echo "<td>".date('Y-m-d H:i:s')."</td>";
				echo "</tr>";
			}
		?>
		
	</table>
</body>
</html>
