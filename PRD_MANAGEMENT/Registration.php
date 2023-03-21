<?php


define('USER_FILE', 'reg.txt');
define('ERROR_MSG', 'Please fill in all fields');
define('PASSWORD_MSG', 'Password must be at least 8 characters');
define('CONFIRM_MSG', 'Passwords do not match');

// check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
   
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    
    
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password) || empty($gender)) {
        $error = ERROR_MSG;
    } elseif (strlen($password) < 8) {
        $error = PASSWORD_MSG;
    } elseif ($password != $confirm_password) {
        $error = CONFIRM_MSG;
    } else {
        
        $users = file(USER_FILE, FILE_IGNORE_NEW_LINES);
        foreach ($users as $user) {
            $user = explode(',', $user);
            if ($user[1] == $email) {
                $error = 'Email already registered';
                break;
            }
        }
        
       
        if (!isset($error)) {
            $user_data = "$username,$email,$password,$gender\n";
            file_put_contents(USER_FILE, $user_data, FILE_APPEND);
            $success = 'Registration successful';
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<center><title>Registration</title>
</head>
<body>

	<h1>Registration</h1>
	
	<?php if (isset($error)): ?>
	<p style="color: red;"><?php echo $error; ?></p>
	<?php endif; ?>
	
	<?php if (isset($success)): ?>
	<p style="color: green;"><?php echo $success; ?></p>
	<?php endif; ?>
	
	<form method="post">
		<label>Username:</label>
		<input type="text" name="username"><br><br>
		
		<label>Email:</label>
		<input type="email" name="email"><br><br>
		
		<label>Password:</label>
		<input type="password" name="password"><br><br>
		
		<label>Confirm Password:</label>
		<input type="password" name="confirm_password"><br><br>
		
		<label>Gender:</label>
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="other">Other<br><br>
		
		<input type="submit" value="Register">
        <input type="button" onclick="window.location.href='login.php'" value="Log in?">
	</form>

</body>
</html>
