<?php
    include("../config/connectionDB.php");

    //get data

    $FName = $_POST['f_name'];
    $LName = $_POST['l_name'];
    $idnum = $_POST['id_num'];
    $address = $_POST['address'];
    $celphone = $_POST['cel_phone'];
    $email = $_POST['email'];
    $pass = md5($_POST['passwd']);

    $sql = "INSERT INTO users (first_name,last_name,number_id,address,celphone,email,password) 
    VALUE ('$FName','$LName','$idnum','$address','$celphone','$email','$pass')";  

    if($conn->query($sql)===true){
        echo ".:: USER HAS BEEN CREATED SUCCESSFULLY::.";

    }else{
        echo "ERROR:". $conn->error. "<br>".$sql;
    }

 ?>