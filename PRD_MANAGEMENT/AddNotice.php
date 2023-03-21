<!DOCTYPE html>
<html>
<head>
	<center><title>Notice Board</title>
</head>
<body>
	<h1>Notice Board</h1>
	
	
	<h2>Add Notice</h2>
	<form action="" method="POST">
		<label for="notice_title">Notice Title:</label>
		<input type="text" id="notice_title" name="notice_title" required><br><br>
		
		<label for="notice_body">Notice Body:</label>
		<textarea id="notice_body" name="notice_body" rows="5" cols="30" required></textarea><br><br>
		
		<input type="submit" name="add_notice" value="Add Notice">
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
            foreach($notices as $key => $notice) {
				echo "<li>".$notice['title']." - ".$notice['body']."</li>";
			}
		?>
	</ul>
</body>
</html>