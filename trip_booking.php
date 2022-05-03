<?php
  session_start();
  if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true){
    header("location: login.php");
  } 
?>

<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bookingStyle.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <title>HolidayHype Trip Booking</title>
    <link rel="icon" href="icon.png" type="image/icon type">

  </head>

  <body>
    <div class="container mt-5 mb-5">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-7">
          <div class="border border-gainsboro p-3">

            <h2 class="h6 text-uppercase mb-0">Total Travel Expense : <strong class="cart-total">2886.45</strong></h2>
          </div>
<form action="Receipt.php" method="post" target="_blank">
          <div class="border border-gainsboro p-3 mt-3 clearfix item">
            <div class="text-lg-left">
              <i class="fa fa-ticket fa-2x text-center" aria-hidden="true"></i>
            </div>
            <div class="col-lg-5 col-5 text-lg-left">
              <h3 class="h6 mb-0">Adults<br>
                <small>Cost: ₹1999.00/Person</small>
              </h3>
            </div>
            <div class="product-price d-none">1999.00</div>
            <div class="pass-quantity col-lg-3 col-md-4 col-sm-3">
              <label for="pass-quantity" class="pass-quantity">Adults</label>
              <input class="form-control" type="number" value="1" min="1" name="adults">
            </div>
            <div class="col-lg-2 col-md-1 col-sm-2 product-line-price pt-4">
              <span class="product-line-price">1999.00
              </span>
            </div>
          </div>

          <div class="border border-gainsboro p-3 mt-3 clearfix item">
            <div class="text-lg-left">
              <i class="fa fa-ticket fa-2x text-center" aria-hidden="true"></i>
            </div>
            <div class="col-lg-5 col-5 text-lg-left">
              <h3 class="h6 mb-0">Childrens<br><small><small>Cost: ₹750.00/Child</small></small></h3>
            </div>
            <div class="product-price d-none">750.00</div>
            <div class="pass-quantity col-lg-3 col-md-4 col-sm-3">
              <label for="pass-quantity" class="pass-quantity">Childrens</label>
              <input class="form-control" type="number" value="1" min="0" name="childrens">
            </div>
            <div class="col-lg-2 col-md-1 col-sm-2 product-line-price pt-4">
              <span class="product-line-price">750.00</span>
            </div>
          </div><!-- item -->
        </div>

        <div class="col-xl-3 col-lg-4 col-md-5 totals">
          <div class="border border-gainsboro px-3">
            <div class="border-bottom border-gainsboro">
              <p class="text-uppercase mb-0 py-3"><strong>Booking Summary</strong></p>
            </div>
            <div class="totals-item d-flex align-items-center justify-content-between mt-3">
              <p class="text-uppercase">Subtotal</p>
              <p class="totals-value" id="cart-subtotal">2749</p>
            </div>
            <div class="totals-item d-flex align-items-center justify-content-between">
              <p class="text-uppercase">Estimated Tax</p>
              <p class="totals-value" id="cart-tax">137.45</p>
            </div>
            <div class="totals-item totals-item-total d-flex align-items-center justify-content-between mt-3 pt-3 border-top border-gainsboro">
              <p class="text-uppercase"><strong>Total</strong></p>
              <p class="totals-value font-weight-bold cart-total">2886.45</p>
            </div>
          </div>
          <button onclick="this.form.submit()" class="mt-3 btn btn-pay w-100 d-flex justify-content-between btn-lg rounded-0">Pay Now <span class="totals-value cart-total">2886.45</span></button>
        </div>
</form>
      </div>
    </div><!-- container -->

    <script>
      $(document).ready(function() {

        /* Set rates + misc */
        var taxRate = 0.05;
        var fadeTime = 300;

        $('.pass-quantity input').change(function() {
          updateQuantity(this);
        });

        $('.remove-item button').click(function() {
          removeItem(this);
        });


        /* Recalculate cart */
        function recalculateCart() {
          var subtotal = 0;

          /* Sum up row totals */
          $('.item').each(function() {
            subtotal += parseFloat($(this).children('.product-line-price').text());
          });

          /* Calculate totals */
          var tax = subtotal * taxRate;
          var total = subtotal + tax;

          /* Update totals display */
          $('.totals-value').fadeOut(fadeTime, function() {
            $('#cart-subtotal').html(subtotal.toFixed(2));
            $('#cart-tax').html(tax.toFixed(2));
            $('.cart-total').html(total.toFixed(2));
            if (total == 0) {
              $('.checkout').fadeOut(fadeTime);
            } else {
              $('.checkout').fadeIn(fadeTime);
            }
            $('.totals-value').fadeIn(fadeTime);
          });
        }

        /* Update quantity */
        function updateQuantity(quantityInput) {
          /* Calculate line price */
          var productRow = $(quantityInput).parent().parent();
          var price = parseFloat(productRow.children('.product-price').text());
          var quantity = $(quantityInput).val();
          var linePrice = price * quantity;

          /* Update line price display and recalc cart totals */
          productRow.children('.product-line-price').each(function() {
            $(this).fadeOut(fadeTime, function() {
              $(this).text(linePrice.toFixed(2));
              recalculateCart();
              $(this).fadeIn(fadeTime);
            });
          });
        }

        /* Remove item from cart */
        function removeItem(removeButton) {
          /* Remove row from DOM and recalc cart total */
          var productRow = $(removeButton).parent().parent();
          productRow.slideUp(fadeTime, function() {
            productRow.remove();
            recalculateCart();
          });
        }

      });

    </script>
  </body>

</html>