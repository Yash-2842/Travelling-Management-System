<?php
  include 'google_login/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstarp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>


    <title>HolidayHype</title>
    <link rel="icon" href="icon.png" type="image/icon type">
</head>
<body>

    <?php
        require 'partials/_navbar.php'
    ?>
    
    <?php
        require 'partials/_carousel.php'
    ?>

    <div class="row row-cols-1 row-cols-md-3 g-6" style="margin: 30px 30px">
        <?php
            require 'partials/_card1.php'
        ?>
        <?php
            require 'partials/_card2.php'
        ?>
        <?php
            require 'partials/_card3.php'
        ?>
        <?php
            require 'partials/_card4.php'
        ?>
        <?php
            require 'partials/_card5.php'
        ?>
        <?php
            require 'partials/_card6.php'
        ?>
    </div>
    

    <div class="footer" style="background-color:black;height:90px">
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
    <div class="col-md-4 d-flex align-items-center">

      <span class="text-muted">&copy; HolidayHype 2021 Company, Inc</span>
    </div>

  </footer>
</div>
</div>
</body>
</html>