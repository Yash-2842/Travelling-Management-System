<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Layout</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- star css -->
    <link rel="stylesheet" type="text/css" href="css/starability-basic.css"/>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="incre-decre.js"></script>
    
</head>
<body>
    
<div class="row mb-3 mt-3" style="max-width: 80vw; margin:auto;">
    <div class="col-md-6 mt-3 mb-2">
        
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner"  >
                <div class="carousel-item active">
                    <img src="d1.jpg" class="d-block w-100" alt="" height="300px" >
                </div>
                <div class="carousel-item">
                    <img src="delhi.jpg" class="d-block w-100" alt="" height="300px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">DELHI</h5>
                <p class="card-text">Delhi, India’s capital territory, is a massive metropolitan area in the country’s north.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Delhi, India</li>
                <li class="list-group-item">Package 3 Days/2 Nights</li>
                <li class="list-group-item">Adults : ₹1999<br>Childrens : ₹750</li>
            </ul>
          
            <a class="card-footer" align="center" type="submit" style="background-color:#0d6efd;color:#fff;border:1px solid grey; text-decoration: none;" href="trip_booking.php">BOOK NOW</a>
          
        </div>

    </div>
    <div class="col-md-6 mt-2 mb-3">

        <!-- <% if(currentUser){ %> -->
          <?php
          if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true){
            
          } else {
            echo '<h2>Leave a Review</h2>
            <form action="insertReview.php" method="POST" class="mb-3 validated-form" novalidate>
                <fieldset class="starability-basic">
                    <input type="radio" id="no-rate" class="input-no-rate" name="review[rating]" value="1" checked
                        aria-label="No rating." />
                    <input type="radio" id="first-rate1" name="rating" value="1" />
                    <label for="first-rate1" title="Terrible">1 star</label>
                    <input type="radio" id="first-rate2" name="rating" value="2" />
                    <label for="first-rate2" title="Not good">2 stars</label>
                    <input type="radio" id="first-rate3" name="rating" value="3" />
                    <label for="first-rate3" title="Average">3 stars</label>
                    <input type="radio" id="first-rate4" name="rating" value="4" />
                    <label for="first-rate4" title="Very good">4 stars</label>
                    <input type="radio" id="first-rate5" name="rating" value="5" />
                    <label for="first-rate5" title="Amazing">5 stars</label>
                </fieldset>
                <div class="mb-3">
                    <label class="form-label" for="body">Review Text</label>
                    <textarea class="form-control" name="review" id="body" cols="30" rows="3" required></textarea>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <button class="btn btn-success">Submit</button>
            </form>';
          }
        ?>
          
        <!-- <h2>Leave a Review</h2>
        <form action="/campgrounds/<%=campground._id%>/reviews" method="POST" class="mb-3 validated-form" novalidate>
            <div class="mb-3">
                <label class="form-label" for="rating">Rating</label>
                <input class="form-range" type="range" min="1" max="5" name="review[rating]" id="rating">
            </div>
            <fieldset class="starability-basic">
                <input type="radio" id="no-rate" class="input-no-rate" name="review[rating]" value="1" checked
                    aria-label="No rating." />
                <input type="radio" id="first-rate1" name="review[rating]" value="1" />
                <label for="first-rate1" title="Terrible">1 star</label>
                <input type="radio" id="first-rate2" name="review[rating]" value="2" />
                <label for="first-rate2" title="Not good">2 stars</label>
                <input type="radio" id="first-rate3" name="review[rating]" value="3" />
                <label for="first-rate3" title="Average">3 stars</label>
                <input type="radio" id="first-rate4" name="review[rating]" value="4" />
                <label for="first-rate4" title="Very good">4 stars</label>
                <input type="radio" id="first-rate5" name="review[rating]" value="5" />
                <label for="first-rate5" title="Amazing">5 stars</label>
            </fieldset>
            <div class="mb-3">
                <label class="form-label" for="body">Review Text</label>
                <textarea class="form-control" name="review[body]" id="body" cols="30" rows="3" required></textarea>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <button class="btn btn-success">Submit</button>
        </form> -->
        <!-- <% } %>

        <% if(campground.reviews.length) { %>  -->
        <h2>Reviews</h2>
            <!-- <% for(let review of campground.reviews) { %> -->
            <?php
              include 'readReview.php';
            ?>
            <!-- <% } %>
        <% } %>  -->
    </div>
</div>



    

    
</body>
</html>