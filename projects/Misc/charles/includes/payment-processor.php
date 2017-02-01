<?php
//GET NONCE
$nonce = $_POST['nonceValue'];
$transactionAmount = $_POST['checkoutValue'];

//INITITATE SALE
$result = Braintree_Transaction::sale(array(
  'amount' => $transactionAmount,
  'paymentMethodNonce' => $nonce
));

if ($result->success)
  echo('<h3 class="success"><strong>Great Success!</strong> Transaction ID: ' . $result->transaction->id . '</h3>');
else
  echo('<h3 class="error"><strong>Unsuccessful transaction:</strong> ' . $result->message . '</h3>');
