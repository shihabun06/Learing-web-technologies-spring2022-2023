<html>
    <head>
        <title>Add Product</title>
    </head>

    <body>
        <form method="POST" action=". . /controller/addProductCheck.php" enctype="">
            <fieldset>
                <legend>Add product</legend>
                name: <input type="text" name="name" value=""/> <br>
                buying price: <input type="number" name="buy" value=""/> <br> 
                selling price: <input type="number" name="sell" value=""/> <br>
                <hr>
                <input type="checkbox"> Display <br>
                <input type="submit" name="submit" value="Save"/>
            </fieldset>
        </form>

    </body>
</html>