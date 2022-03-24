<?php 
include_once('header.php') ;
include_once('redirect.php');
   $sql = "SELECT * FROM registered_users WHERE email = '".$_SESSION['email']."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $userId = $row['id'];

    if(isset($_REQUEST['deleteAccount'])){
        $sql = "DELETE FROM registered_users WHERE id = '".$userId."'";
        $result = $conn->query($sql);
        if($result==true){
            $deleteMsg = "<strong class='text-danger'> Account Delete Successfully </strong>";
            echo "<script> alert('Account Deleted Successfully');</script>";
            unset($_SESSION['login']);
            unset($_SESSION['email']);
                if(session_destroy()) {
                header("Location:../index.php");
                }
          }else {
            echo "<script> console.log('".$conn->error."');</script>";
          }
        }
?>
    <div class="text-center col-12">
        <img src="https://www.pinclipart.com/picdir/middle/355-3553881_stockvader-predicted-adig-user-profile-icon-png-clipart.png" alt="profile" width="100px" height="100px">
    </div>
    <div class="container">
        <h3 class="text-center"><strong >Your Profile </strong></h3>
        <div class="row bg-light">
            <div class="collapse col-md-12" id="collapseExample1">
                <div class="card card-body">
                <strong style="position:relative;bottom:10px;left:10px"> <i class="fas fa-window-close float-end text-danger" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"></i> </strong>
                    <form  action="" method="POST">
                    <div id="errorProfile"></div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control newName" value="<?php echo $row['full name']; ?>" name="name" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput"">Your new name will be ? </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control namePassword" name = "password" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput"> Your Password was ? </label>
                        </div>
                        <input type="hidden" class="userid" value="<?php echo $userId;?>">
                        <button name="changeName" class="btn btn-success changeName">Submit</button>
                    </form>
                </div>
            </div>
            <div class="collapse col-md-12" id="collapseExample2">
                <div class="card card-body">
                <strong style="position:relative;bottom:10px;left:10px"> <i class="fas fa-window-close text-danger float-end" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample"></i></strong>
                <div id="errorEmail"></div>
                    <form method="POST" action="">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control newEmail" value="<?php echo $row['email']; ?>"name = "email" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Your new email address will be ? </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control emailPassword" name = "password" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput"> Your Password was ? </label>
                        </div>
                        <input type="hidden" class="userid" value="<?php echo $userId;?>">
                        <button name="changeEmail" class="btn btn-primary changeEmail">Submit</button>
                    </form>
                </div>
            </div>
            <div class="collapse col-md-12" id="collapseExample3">
                <div class="card card-body">
                <strong style="position:relative;bottom:10px;left:10px"> <i class="fas fa-window-close text-danger float-end" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample"></i></strong>
                <form method="POST" action="">
                    <div id="errorPassword"></div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control oldPassword" id="floatingInput1" placeholder="name@example.com">
                            <label for="floatingInput1"> Old Password was ? </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control newPassword" id="floatingInput2" placeholder="name@example.com">
                            <label for="floatingInput2"> Now Your new password will be ? </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control confirmPassword" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput"> Re-enter new password </label>
                        </div>
                        <input type="hidden" class="userid" value="<?php echo $userId;?>">
                        <button  class="btn btn-warning changePassword">Submit</button>
                    </form>
                </div>
            </div>
            <div class="collapse col-md-12" id="collapseExample4">
                <div class="card card-body text-center">
                  <span class="text-danger"> Are You sure want to delete this account ?</span>
                  <form method="POST" action="" action="" method="post">
                    <button type="submit" class="btn-sm btn-danger mx-1" name="deleteAccount">Yes</button>
                  </form>
                  <div>
                    <button class="btn-sm btn-success" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample" > No </button>
                  </div>
                </div>
            </div>
            <div class="col-md-6 btn btn-dark my-1">
                <button class="btn btn-outline-success nameChangeBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"> Change Name </button>
            </div>
            <div class="col-md-6 btn btn-dark my-1">
                <button class="btn btn-outline-primary emailChangeBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample"> Change Email </button>
            </div>
            <div class="col-md-6 btn btn-dark my-1">
                <button class="btn btn-outline-warning passwordChangeBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample"> Change Password </button>
            </div>
            <div class="col-md-6 btn btn-dark my-1">
                <button class="btn btn-outline-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample"> Delete Account </button>
            </div>
            <div class="col-md-12 btn btn-light my-1">
                <a href="logout.php"><button class="btn btn-danger" type="button"> Logout </button></a>
            </div>
        </div>
    </div>

<?php include_once ('footer.php') ?>