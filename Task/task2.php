<?php

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    if(strlen($name)>0){
        if($name===strrev($name)){ 
            echo "is a Palindrome ";
           }else{
            echo " is NOT a Palindrome ";
           }
    }
}
?>