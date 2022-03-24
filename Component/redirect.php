<?php
if(isset($_SESSION['login'])){
    include_once('facebook.php');  
    include_once('instagram.php');
    include_once('github.php');
  }else {
    header("Location:../index.php");
  }
?>