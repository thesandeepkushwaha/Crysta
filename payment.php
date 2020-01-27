<?php
  session_start();
  include('dbconnect.php');
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Crysta</title>
	<link rel="stylesheet" type="text/css" href="./assets/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>


<div class="container">
  <div class="jumbotron">
  <a href="index.php" style="text-decoration:none"><h2 class="my-4 text-center">Crysta Payment Portal</h2></a>
</div>
<form action="./payment_success.php" method="post" id="payment-form">
  <div class="form-row">
       <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
       <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
       <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
     <div id="card-element" class="form-control">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button>Submit Payment</button>
</form>
</div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://js.stripe.com/v3/"></script>
<script src="./assets/charge.js"></script>

</body>
</html>