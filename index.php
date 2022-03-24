<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'database.php';

session_start();
if(!isset($_SESSION['login'])){
    if(isset($_REQUEST['submit'])){
        if($_POST['email'] == "" || $_POST['pass']==""){
            $error = "<strong style='color:red'> All fields are required! </strong>";
        }else {
                $email = $_POST['email'];
                $password = $_POST['pass'];
                $sql = "SELECT  `email` FROM registered_users WHERE email = '".$email."' limit 1";
                $result = $conn->query($sql);
                if($result->fetch_assoc()==TRUE){
                    $sql = "SELECT  `email` , `password` FROM registered_users WHERE email = '".$email."' AND password = '".$password."' limit 1";
                    $result = $conn->query($sql);
                    if($result->fetch_assoc()==TRUE){
                        $_SESSION['login'] = true;
                        $_SESSION['email'] = $email;
                        header('Location:Component/home.php');
                        exit;
                    }else {
                        $error = "<strong style='color:red'> please enter vaild email and password ! </strong>";
                    }
                }else {
                    $error = "<strong style='color:yellow'>  Your email <strong style='color:blue'>" .$email. " </strong> is not registered with us.  </strong>";
                }
            }
        }
}else {
    header("Location:Component/home.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For google icons  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <!-- Stylesheet Css -->
    <link rel="stylesheet" href="stylesheet/index.css">
    <link rel = "icon" href = "https://e7.pngegg.com/pngimages/856/614/png-clipart-raspberry-pi-home-automation-kits-home-computer-malware-hacker-icon-hat-computer.png">
    <title> Social Network Hack </title>
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <h2> <u> <strong> <a href="home2.php">  Social Networks Hack </a></strong> </u>  </h2>
        <form action="" method="post">
            <?php if(isset($error)){ echo $error;}?>
            <?php if(isset($deleteMsg)){ echo $deleteMsg;}?>
            <div class="form-item">
                <span class="material-icons-outlined">
                    account_circle
                    </span>
                <input type="email" name="email" id="email" placeholder="enter email">
            </div>

            <div class="form-item">
                <span class="material-icons-outlined">                   
                    lock
                    </span>
                <input type="password" name="pass" id="pass" placeholder="enter password">

            </div>

            <button type="submit" name="submit"> LOGIN </button>
            <p> Or Login Using</p>
            <div class="options">
                <button class="fb">Facebook</button>
                <button class="gl">Google</button>
            </div>
            <p>New User? <a href="Component/newUser.php">Create an account</a></p>
        </form>

    </div>

</body>

</html>