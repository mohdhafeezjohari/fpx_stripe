<?php

require('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_xxx');

$payment_intent = \Stripe\PaymentIntent::create([
  'payment_method_types' => ['fpx'],
  'amount' => $_POST['total_amount'] * 100,
  'currency' => 'myr'
]);

<head>
  <title>stripe test</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
</head>
<div class='container'>
<br>
<div class="jumbotron">
    <p>this is stripe test [FPX]</p>
<form id="payment-form">
  <div class="form-row">
    <div>
      <label for="fpx-bank-element">
        choose bank below
      </label>
      <div id="fpx-bank-element">
        <!-- A Stripe Element will be inserted here. -->
      </div>
    </div>
  </div>

  <button id="fpx-button" data-secret="<?= $payment_intent->client_secret ?>">
    PAY NOW
  </button>

  <!-- Used to display form errors. -->
  <div id="error-message" role="alert"></div>
</form>
</div>

</div>
<script>

$( document ).ready(function() {

var stripe = Stripe('pk_xxx');
var elements = stripe.elements();

var style = {
  base: {
    // Add your base input styles here. For example:
    padding: '10px 12px',
    color: '#32325d',
    fontSize: '16px',
  },
};

// Create an instance of the fpxBank Element.
var fpxBank = elements.create(
  'fpxBank',
  {
    style: style,
    accountHolderType: 'individual',
  }
);

// Add an instance of the fpxBank Element into the container with id `fpx-bank-element`.
fpxBank.mount('#fpx-bank-element');

var form = document.getElementById('payment-form');

form.addEventListener('submit', function(event) {
  event.preventDefault();

  var fpxButton = document.getElementById('fpx-button');
  var clientSecret = fpxButton.dataset.secret;
  stripe.confirmFpxPayment(clientSecret, {
    payment_method: {
      fpx: fpxBank,
    },
    // Return URL where the customer should be redirected after the authorization
    return_url: `${window.location.href}`,
  }).then((result) => {
    if (result.error) {
      // Inform the customer that there was an error.
      var errorElement = document.getElementById('error-message');
      errorElement.textContent = result.error.message;
    }
  });
});

});
</script>
