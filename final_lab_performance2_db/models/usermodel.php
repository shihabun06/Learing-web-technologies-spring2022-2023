<?php 
    require_once('db.php');

    function Add($p){

        $con = getConnection();
        $sql = "insert into products(name,buy,sell,profit) values('', '{$p['name']}','{$p['buy']}','{$p['sell']}','{$p['profit']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

       


?>