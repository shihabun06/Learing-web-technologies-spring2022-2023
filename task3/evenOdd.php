<?php

function check($number){
    if($number % 2 == 0){
        echo "Even"; 
    }
    else{
        echo "Odd";
    }
}
  
// Driver Code
$number = 39;
check($number)
?>