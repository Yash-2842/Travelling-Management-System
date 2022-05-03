<?php
  session_start();
  $_SESSION['visit'] = "taj";
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

    <title>Welcome Page</title>
</head>
<body>

    <?php
        require 'partials/_navbar.php'
    ?>
  <h1 align="center"  style="font-family: 'Merienda', cursive;">AGRA</h1>
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="taj.jpg" class="d-block w-100" alt="..." width="100%" height="500px">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="tj2.jpg" class="d-block w-100" alt="..." width="100%" height="500px">
    </div>
    <div class="carousel-item">
      <img src="tj3.jpg" class="d-block w-100" alt="..." width="100%" height="500px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>
<br><br>
<p style=" font-family:Lucida Bright ,monospace">Agra is a city on the banks of the river Yamuna in the northern state of Uttar Pradesh, India. It is 378 kilometres west of the state capital, Lucknow, 206 kilometres south of the national capital New Delhi, 58 kilometres south from Mathura and 125 kilometres north of Gwalior. Agra is one of the most populous cities in Uttar Pradesh, and the 24th most populous city in India.</p>


<?php
        require 'tajbook.php'
    ?>

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