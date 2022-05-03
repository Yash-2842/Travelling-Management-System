<?php

  //Include Google Configuration File
  include('google_login/gconfig.php');

  if(!isset($_SESSION['access_token'])) {
   //Create a URL to obtain user authorization
   $google_login_btn = '<a href="'.$google_client->createAuthUrl().'" class="btn btn-danger" style="margin-top: 5%; width: 45%; border-radius: 15px;">Google</a>';
  } else {
    header("Location: index.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | HolidayHype</title>
    <link rel="icon" href="icon.png" type="image/icon type">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    

    <style>
        .out {
            height: 550px;
            width: 85%;

            /* background-image: url('images/5.jpg');
            background-repeat:no-repeat; 
            background-size: cover; */

            margin: auto;
            /* border: 3px solid green; */

            position: absolute;
            top: 10%;
            bottom: 0;
            left: 0;
            right: 0;

            border-radius: 30px;

            box-shadow: 1px 1px 10px 1px black;
        }
</style>
</head>
<body style="background-image: url('images/5 more blur.jpg'); background-repeat:no-repeat; background-size: cover;">
    
<?php
    require 'partials/_navbar.php'
?>

    <div class="out row" style="margin-top: 0.5%">
        <div class="col-7" style="border-radius: 28px 0px 0px 28px; background-image: url('images/5.jpg'); background-repeat:no-repeat; 
            background-size: cover;">
            <p style="margin: 3% 0px 0px 3%; font-size: 230%; color: darkblue;">Welcome</p>    
        </div>
        <div class="col" style="border-radius: 0px 28px 28px 0px; background-color: white; background-image: url('images/blue_line.jpg'); background-position: -110% -210%; background-repeat: no-repeat;">
            <h1 class="text-center" style="margin-top: 45px;">Log In</h1>

            <form action="loginLogic.php" method="post" style="margin: 40px 60px 10px 60px">
                <div class="mb-4">
                    <!-- <label for="email" class="form-label">Email</label> -->
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" style="border-radius: 8px; background-color: lightgrey;">
                </div>
                <div class="mb-3">
                    <!-- <label for="password" class="form-label">Password</label> -->
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" style="border-radius: 8px; background-color: lightgrey;" aria-describedby="emailHelp">
                    <div id="passwordHelp" class="form-text" style="text-align: right;">
                        <a href="#" class="text-muted text-decoration-none">Forget Password?</a>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="margin-top: 25px; width: 35%; border-radius: 15px;">Log In</button>
            </form>        
                    <div style="margin-top: 12%;">
                    <!-- <button class="btn btn-danger" style="margin-top: 40px; width: 45%; border-radius: 15px;">Google</button> -->
                    <div>
                    <span class="text-muted" >-------- Or Signup with Google --------</span>
                    </div>
                    <?php
                        echo '<div align="center">'.$google_login_btn . '</div>';
                    ?>
                    </div>
                </div>
            

            <div style="margin-top: 11%; text-align: center;">
                <p class="text-muted fw-light">If you don't have an account? <a href="signup.php">Sign Up</a></p>
            </div>
        </div>
    </div>

</body>
</html>