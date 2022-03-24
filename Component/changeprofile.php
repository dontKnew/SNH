<?php
require_once('../database.php');
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $userid = $_POST['userid'];
    $sqlcheckPass = "SELECT `password` FROM `registered_users` WHERE `id` = '".$userid."'";
    $sqlresult = $conn->query($sqlcheckPass);
    $row = $sqlresult->fetch_assoc();
    if($row['password']==$password){
        $sql = "UPDATE registered_users SET `full name` = '".$name."' WHERE id = '".$userid."'";
        if ($conn->query($sql)==true){
            echo 200;   
        }else {
            echo $conn->error;
            // echo "404"   
        }
    }else{
        echo 201;   
    }
}

// change email
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userid = $_POST['userid'];
    $sqlcheckPass = "SELECT `password` FROM `registered_users` WHERE `id` = '".$userid."'";
    $sqlresult = $conn->query($sqlcheckPass);
    $row = $sqlresult->fetch_assoc();
    if($row['password']==$password){
        $sql = "UPDATE registered_users SET `email` = '".$email."' WHERE id = '".$userid."'";
        if ($conn->query($sql)==true){
            echo 200;   
        }else {
            echo $conn->error;
            // echo "404"   
        }
    }else{
        echo 201;   
    }
}

// change email
if(isset($_POST['oldPass'])){
    $old = $_POST['oldPass'];
    $new = $_POST['newPass'];
    $confirm = $_POST['confirmPass'];
    $userid = $_POST['userid'];
    $sql = "SELECT `password` FROM `registered_users` WHERE `id` = '".$userid."'";
    $sqlresult = $conn->query($sql);
    $row = $sqlresult->fetch_assoc();
    if($row['password']==$old){
        $sql = "UPDATE registered_users SET `password` = '".$new."' WHERE id = '".$userid."'";
        if ($conn->query($sql)==true){
            echo 200;   
        }else {
            echo $conn->error;
            // echo "404"   
        }
    }else{
        echo 201;   
    }
}   
?>