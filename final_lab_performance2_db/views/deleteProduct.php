<html>
    <head>
        <title>Delete Product</title>
    </head>

    <body>
        <form method="POST" action=". . /controller/deleteProductCheck.php" enctype="">
            <fieldset>
                <legend>Delete product</legend>
                name: <input type="text" name="name" value=""/> <br>
                buying price: <input type="number" name="buying price" value=""/> <br> 
                selling price: <input type="number" name="selling price" value=""/> <br>
                <hr>
                <input type="checkbox"> Display <br>
                <input type="submit" name="submit" value="delete"/>
            </fieldset>
        </form>

    </body>
</html>