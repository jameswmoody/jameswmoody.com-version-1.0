<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Braintree PHP Integration - Checkout</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("includes/header.php"); ?>

        <link rel="stylesheet" href="/style/style.css">
    </head>
    <body>
        <!-- Add your site or application content here -->
        <h1>Hello there!</h1>
        <p>This is a test Braintree processing</p>

        <?php

          //GET NONCE
          $nonce = $_POST['payment_method_nonce'];
          $transactionAmount = $_POST['checkoutValue'];

          //INITITATE SALE
          $result = Braintree_Transaction::sale(array(
            'amount' => '10.00',
            'paymentMethodNonce' => $nonce,
            'options' => [
              'submitForSettlement' => True,
            ]
          ));

          if ($result->success)
            echo('<h3 class="success">Great Success! Transaction ID: ' . $result->transaction->id . '</h3>');
          else
            echo('<h3 class="error">Unsuccessful transaction: ' . $result->message . '</h3>');

          print_r($_POST);
          print("<pre>".print_r($result,true)."</pre>");



         ?>

    </body>
</html>
