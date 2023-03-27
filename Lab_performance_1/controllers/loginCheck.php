<?php	

        session_start();
       
        require_once '../models/db.php';
        if(isset($_REQUEST['submit'])){
    
            //print_r($_GET);
            $username = $_REQUEST['username']; 
            $password = $_REQUEST['password']; 
            
    
            if($username == "" && $password == "") {
                echo "Null value ..";
                
            }else{
                $con = mysqli_connect('127.0.0.1','root', '', 'webtech');
                $sql = "select * from users where username='{$username}' and password='{password}'";
               $result= mysqli_query($con, $sql);
               $count = mysqli_num_rows($result);

                //$user = ['username' => $username, 'password' => $password];
                //$status = auth($user);
    
                if($count == 1){
                    $_SESSION['flag'] = "true";
                    $_SESSION['username'] = $username;
                    header('location: home.php');
                }else{
                    echo "invalid user!";
                }
            }
        }else{
            echo "invalid request...";
        }
           
?>