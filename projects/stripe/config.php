<?php
require_once('stripe-php/lib/Stripe.php');

$stripe = array(
  "secret_key"      => "sk_test_o5ymOpG4vk0gYtgOm9jZOGaU",
  "publishable_key" => "pk_test_uoZ2YjqsJuCcvEVnvk0WOizt"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);

  echo('<pre>');
  print_r($stripe); 
  echo('</pre>');
?> 