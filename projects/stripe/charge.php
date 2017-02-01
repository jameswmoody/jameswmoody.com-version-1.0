
<?php
  /*require_once('/config.php');*/

require_once('stripe-php/init.php');

$stripe = array(
  "secret_key"      => "sk_test_o5ymOpG4vk0gYtgOm9jZOGaU",
  "publishable_key" => "pk_test_uoZ2YjqsJuCcvEVnvk0WOizt"
);

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_o5ymOpG4vk0gYtgOm9jZOGaU");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create a charge: this will charge the user's card
try {
  $charge = \Stripe\Charge::create(array(
    "amount" => 1000, // Amount in cents
    "currency" => "gbp",
    "source" => $token,
    "description" => "Example charge"
    ));
} catch(\Stripe\Error\Card $e) {
  // The card has been declined
}


?>


