<?php
$filename = "login.txt"; 
$delimiter = ","; 

// check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // check if username and password are valid
    $isValid = false;
    $file = fopen($filename, 'r');
    while (!feof($file)) {
        $line = fgets($file);
        $data = explode($delimiter, trim($line));
        if ($data[0] == $username && $data[1] == $password) {
            $isValid = true;
            break;
        }
    }
    fclose($file);

    if ($isValid) {
        echo "Login successful";
        
    } else {
        echo "Invalid username or password";
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <center><title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post"><fieldset>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Login"></fieldset>
        <input type="button" onclick="window.location.href='forgot_password.php'" value="Forgot Password">
     <input type="button" onclick="window.location.href='Registration.php'" value="Registration">
    </form>
</body>
</html>
