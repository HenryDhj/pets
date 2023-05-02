<?php
    //Developer: Tom
    //MySQL engine credentials 

    $hots = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "pets";
    $port = "3306";

    //create connection

    $conn = new mysqli($hots, $username, $password,$dbname,$port);

    //check connection

    if($conn->connect_error){
        echo "connection failed".$connect_error;

    }else{
        echo "connection successfully";
    }
?>
