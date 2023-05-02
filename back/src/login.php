<?php

//get DataBase connection

include("../config/connectionDB.php");

//get Data

$email = $_POST['email'];
$password = md5($_POST['passwd']);

//create Query

$sql = "SELECT * FROM  users WHERE email ='$email' AND password = '$password'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "The user exists";
}else{
    echo "The user doen't exist or invalid data";
}
?>