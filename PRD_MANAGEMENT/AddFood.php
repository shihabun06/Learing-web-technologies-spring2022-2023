<?php

// Initialize an empty array to store the food items
$food_items = array();

// Check if "Add Food" button was clicked
if (isset($_POST['add_food'])) {
    $item = $_POST['food_item'];
    array_push($food_items, $item);
    echo "New food item added to the menu: " . $item . "<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <center><title>Food Menu</title>
</head>
<body>
    <h1>Food Menu</h1>
    <form method="post">
        <label for="food_item">Enter food item to add:</label>
        <input type="text" name="food_item" id="food_item">
        <button type="submit" name="add_food">Add Food</button>
        
    </form>
</body>
</html>