<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $db_name = "eccomerce_clone";

    $connectDb = new mysqli($localhost, $username, $password, $db_name);

    if($connectDb->connect_error){
        die("Connection Failed". $connectDb->connect_error);
    }else{
        // echo "please kindly sign up!";
    }
    
?>