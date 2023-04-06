<?php 
    session_start();
    require_once('. ./models/usermodel.php');

    if(isset($_POST['submit'])){

        //print_r($_GET);
        $name = $_POST['name']; 
        $buy = $_POST['buy']; 
        $sell = $_POST['sell']; 

                if($name != null  && $buy != null && $sell != null) {
                    $p = ['name'=>$name, 'buy'=>$buy, 'sell'=>$sell];
                    $status = add($p);
                    if($status){
                        header('location:../views/addProduct.php');

            }else{
            echo "DB error, please try again";
        }
    }else {
            echo "Fields can not be null";
        }
       }else{
        echo "invalid request...";
    }
    ?>