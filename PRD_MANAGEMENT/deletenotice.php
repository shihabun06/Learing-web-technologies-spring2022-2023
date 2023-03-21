<!DOCTYPE html>
<html>
<head>
	<center><title>Notice Board</title>
</head>
<body>
<h2>Delete Notice</h2>
	<form action="" method="POST">
		<label for="notice_id">Notice ID:</label>
		<input type="number" id="notice_id" name="notice_id" required><br><br>
		
		<input type="submit" name="delete_notice" value="Delete Notice">
	</form>
	
	
	<h2>Notice List</h2>
	<ul>
		<?php
			
			$notices = array();
			
			
			if(isset($_POST['add_notice'])) {
				
				$notice_title = $_POST['notice_title'];
				$notice_body = $_POST['notice_body'];
				
				
				$new_notice = array(
					"title" => $notice_title,
					"body" => $notice_body
				);
				array_push($notices, $new_notice);
			}
			
			
			if(isset($_POST['delete_notice'])) {
				
				$notice_id = $_POST['notice_id'];
				
				
				unset($notices[$notice_id]);
			}
			
			
			foreach($notices as $key => $notice) {
				echo "<li>".$notice['title']." - ".$notice['body']."</li>";
			}
		?>
	</ul>
</body>
</html>
