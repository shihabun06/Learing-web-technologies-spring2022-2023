<!DOCTYPE html>
<html>
<head>
	<title>Food Menu Editing</title>
</head>
<body>

	<?php
	// Define food menu array
	$food_menu = array(
		"Pizza",
		"Burger",
		"Fries",
		"Pasta",
		"Salad"
	);

	// Check if form has been submitted
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	 {

		// Get selected option from form
		$selected_option = $_POST['selected_option'];

		// Validate selected option
		if ($selected_option == "") 
		{
			echo "<p>Please select an option</p>";
		} else {

			// Perform selected option
			switch ($selected_option) {

				case "update":
					// Get food item to update and new name from form
					$old_name = $_POST['old_name'];
					$new_name = $_POST['new_name'];

					// Validate input
					if ($old_name == "" || $new_name == "")
					 {
						echo "<p>Please enter a food item to update and its new name</p>";
					} else {
						// Find and update food item in menu
						$key = array_search($old_name, $food_menu);
						if ($key !== false) {
							$food_menu[$key] = $new_name;
							echo "<p>Updated food menu:</p>";
							print_menu($food_menu);
						} else {
							echo "<p>Food item not found in menu</p>";
						}
					}
					break;

				case "delete":
					// Get food item to delete from form
					$food_name = $_POST['food_name'];

					// Validate input
					if ($food_name == "") {
						echo "<p>Please enter a food item to delete</p>";
					} else {
						// Find and delete food item from menu
						$key = array_search($food_name, $food_menu);
						if ($key !== false) {
							unset($food_menu[$key]);
							$food_menu = array_values($food_menu);
							echo "<p>Updated food menu:</p>";
							print_menu($food_menu);
						} else {
							echo "<p>Food item not found in menu</p>";
						}
					}
					break;

				case "search":
					// Get search term from form
					$search_term = $_POST['search_term'];

					// Validate input
					if ($search_term == "") {
						echo "<p>Please enter a search term</p>";
					} else {
						// Search for food item in menu
						$matching_items = array();
						foreach ($food_menu as $item) {
							if (strpos($item, $search_term) !== false) {
								$matching_items[] = $item;
							}
						}

						// Display matching items
						if (count($matching_items) > 0) {
							echo "<p>Matching food items:</p>";
							foreach ($matching_items as $item) {
								echo "<p>$item</p>";
							}
						} else {
							echo "<p>No matching food items found</p>";
						}
					}
					break;

				default:
					echo "<p>Invalid option selected</p>";
					break;
			}
		}
	}

	// Print food menu
	function
	// Function to print food menu
 print_menu($menu) {
		echo "<ul>";
		foreach ($menu as $item) {
			echo "<li>$item</li>";
		}
		echo "</ul>";
	}

	?>

	<h1>Food Menu Editing</h1>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="selected_option">Select an option:</label>
		<select id="selected_option" name="selected_option">
			<option value="">--Select Option--</option>
			<option value="update">Update Food List</option>
			<option value="delete">Delete Food List</option>
			<option value="search">Search Food List</option>
		</select>
		<br>

		<!-- Update Food List Option -->
		<div id="update_form" style="display:none;">
			<label for="old_name">Food Item to Update:</label>
			<input type="text" id="old_name" name="old_name">
			<label for="new_name">New Food Item Name:</label>
			<input type="text" id="new_name" name="new_name">
		</div>

		<!-- Delete Food List Option -->
		<div id="delete_form" style="display:none;">
			<label for="food_name">Food Item to Delete:</label>
			<input type="text" id="food_name" name="food_name">
		</div>

		<!-- Search Food List Option -->
		<div id="search_form" style="display:none;">
			<label for="search_term">Search Term:</label>
			<input type="text" id="search_term" name="search_term">
		</div>

		<br>
		<input type="submit" value="Submit">
	</form>

	<script>
		// Show relevant form fields based on selected option
		document.getElementById("selected_option").addEventListener("change", function() {
			var selected_option = document.getElementById("selected_option").value;
			var update_form = document.getElementById("update_form");
			var delete_form = document.getElementById("delete_form");
			var search_form = document.getElementById("search_form");

			switch (selected_option) {
				case "update":
					update_form.style.display = "block";
					delete_form.style.display = "none";
					search_form.style.display = "none";
					break;
				case "delete":
					update_form.style.display = "none";
					delete_form.style.display = "block";
					search_form.style.display = "none";
					break;
				case "search":
					update_form.style.display = "none";
					delete_form.style.display = "none";
					search_form.style.display = "block";
					break;
				default:
					update_form.style.display = "none";
					delete_form.style.display = "none";
					search_form.style.display = "none";
					break;
			}
		});
	</script>

	<?php
	// Print initial food menu
	echo "<p>Initial food menu:</p>";
	print_menu($food_menu);
	?>

</body>
</html>
