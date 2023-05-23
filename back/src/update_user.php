<?php
    include("../config/connectionDB.php");
    $Fname = $_POST['f_name'];
    $Fname = $_POST['l_name'];
    $idnum = $_POST['id_num'];
    $address = $_POST['address'];
    $celPhone = $_POST['cel_phone'];
    $email = $_POST['email'];

    
    $sql="UPDATE users SET
        first_name='$Fname',
        last_name='$Lname',
        number_id='$idnum',
        address='$address',
        celphone='$celphone',
        email='$email'

    WHERE
        number_id='$idnum'
    ";

    if($conn->query($sql)===TRUE){
        echo"<script>alert('user has been update')</script>";
        header("refresh:0;url=http://127.0.0.1/pets/back/src/list_user.php");
        //echo $conn->error;
    }else{
        echo $conn->error;
    }


?>