<?php

// Initialize an empty array to store the food items
$food_items = array();
if (isset($_POST['show_food'])) {
    echo "Food Menu:<br>";
    foreach ($food_items as $item)
    {
        echo "- " . $item . "<br>";
    }
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
        
        <button type="submit" name="show_food">Show Food</button>
    </form>
</body>
</html>
