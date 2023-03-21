<!DOCTYPE html>
<html>
<head>
	<center><title>Payment Control Panel</title>
</head>
<body>
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
