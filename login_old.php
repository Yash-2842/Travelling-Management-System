
<!-- <?php                              // -> File for google login
    // require 'google_login/auth.php'
?>  -->

<?php                              // -> File for google login
    require 'loginLogic.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- bootstarp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <title>Login</title>

 </head>
 <body style="background-image: url('images/login_bg.jpg');">

<?php
    require 'partials/_navbar.php'
?>

  <div class="container">
   <div class="panel panel-default">
    <div class="container mt-3">
        <h1 class="text-center">Login Page</h1>
        <!-- <div class="mt-4 mb-4">
            <?php
                // if($login_button == '')
                // {
                //     header("location: index.php");
                // }
                // else
                // {
                //     echo '<div align="center">'.$login_button . '</div>';
                // }
            ?>
        </div> -->
        

        <form action="loginLogic.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        
    </div>
   </div>
  </div>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>