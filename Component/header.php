<?php
require_once '../database.php';
session_start();
if(isset($_SESSION['login'])){
  $sql = "SELECT id,`full name` FROM registered_users WHERE email = '".$_SESSION['email']."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
}
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "icon" href = "https://www.clipartmax.com/png/middle/420-4209656_spy-512x512-icon-hacker-png.png">
    <link rel="stylesheet" href="../stylesheet/all.css">
    <script src="../Javascript/jquery.min.js"></script>
    <script src="../Javascript/home.js"></script>
    <title>Social Network Hack </title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lobster&family=PT+Sans&family=Pacifico&family=Permanent+Marker&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&family=Lobster&family=PT+Sans&family=Pacifico&family=Permanent+Marker&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
      * {
        font-family: 'PT Sans', sans-serif; 
        margin:0px;
        padding:2px;
      }
      .nav-link:hover {
        background-color: blue;
      }
    </style>
  </head>
      <!-- Navbar Start -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php"><u class="homeHeader" style="font-size:25px; font-family: 'Lobster', cursive;" > Social Network Hack </u> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"    id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION['login'])){
            echo '<a class="nav-link active" href="victim.php">Victim</a>';
          }else {
            echo '<a class="nav-link active" href="newUser.php">Register</a>';
          }
          ?>
        </li>
        <?php if(isset($_SESSION['login'])){
        echo '<li class="nav-item">
              <a class="nav-link active" href="myaccount.php">Profile</a>
            </li>';
        } ?>
        <li class="nav-item">
          <a class="nav-link active" href="toutrial.php">Toutrial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About</a>
        </li>
      </ul>
      <div class="d-flex">
      <a href="logout.php"> <button class="btn-sm <?php if (isset($_SESSION['login'])){echo "btn-outline-dark";}else { echo "btn-success";} ?>">  <?php if (isset($_SESSION['login'])){echo $row['full name']. "! | Logout";}else { echo "Login";} ?>  <i class="fas fa-sign-out-alt ?>text-danger"></i> </button> </a>
    </div>
    </div>
  </div>
    </nav>

    <?php include_once('contact.php'); ?>