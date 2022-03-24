<?php
require_once '../database.php';
session_start();
if(!isset($_SESSION['login'])){
    if(isset($_REQUEST['submit'])){
        if($_POST['name'] == "" || $_POST['email'] == "" || $_POST['npass']=="" || $_POST['cpass']==""){
            $error = "<strong style='color:red'> All fields are required! </strong>";
        }else {
                $sql = "SELECT  `email` FROM registered_users WHERE email = '".$_POST['email']."'limit 1";
                $result = $conn->query($sql);
                if($result->fetch_assoc()==TRUE){
                    $error = "<strong style='color:yellow'> Email already registered, try another!  </strong>";
                }else {
                    if($_POST['npass']==$_POST['cpass']){
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $password = $_POST['npass'];
                        $sql = "INSERT INTO registered_users(`full name`, `email`, `password`) VALUES ('$name','$email','$password')";
                        if($conn->query($sql) == TRUE){
                            $error = "<strong style='color:green'> User registered successfull! || Loging...  </strong>";
                            $sql = "SELECT  `email` , `password` FROM registered_users WHERE email = '".$email."' AND password = '".$password."' limit 1";
                            $result = $conn->query($sql);
                            if($result->fetch_assoc()==TRUE){
                                $_SESSION['login'] = true;
                                $_SESSION['email'] = $email;
                                // header('Location:Component/home.php');
                            }
                            echo '<script> setTimeout(function(){location.reload();},3000)</script>';
        
                        } else {
                            $error = $conn->error. " <strong style='color:red'>  Unable to registered user, Please <a href=''style='text-decoration:none;underline:none;color:blue;'> contact us </a></strong>";
                        }
                    }else {
                        $error = "<strong style='color:red'> Please enter same password </strong>";
                    }
                }
        }
    }
}else {
    header("Location:home.php");
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
    <link rel="stylesheet" href="../stylesheet/index.css">
    <title>Create New Account</title>
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <h2> <u> <strong> <a href="../home2.php"> Hack Social Networks </a> </strong> </u>  </h2>
        <?php if(isset($error)) { echo $error;}?>
        <form action="" method="post" autocomplete="off"/>
            <div class="form-item">
                <span class="material-icons-outlined">
                account_circle
                    </span>
                <input type="text" name="name" id="name" placeholder="your full name" autocomplete="off"/>
            </div>
            <div class="form-item">
                <span class="material-icons-outlined">
                    email
                    </span>
                <input type="email" name="email" id="email" placeholder="enter your email" autocomplete="off"/>
            </div>
            <div class="form-item">
                <span class="material-icons-outlined">                   
                    lock
                    </span>
                <input type="password" name="npass" id="npass" placeholder="enter new password" autocomplete="off"/>
            </div>
            <div class="form-item">
                <span class="material-icons-outlined">                   
                    lock
                    </span>
                <input type="password" name="cpass" id="cpass" placeholder="confirm password" autocomplete="off"/>
             </div>

            <button type="submit" name="submit"> GET STARTED... </button>
            <p>Already have an Account ? <a href="../index.php">Login</a></p>
        </form>

    </div>

</body>
</html>