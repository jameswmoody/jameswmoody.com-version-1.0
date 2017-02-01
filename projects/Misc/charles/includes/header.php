<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Braintree PHP Integration</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
          //Load Braintree Library
          require_once 'php-SDK/lib/Braintree.php';

          //Place API Configuration
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('rvf32ngw6kz827w8');
Braintree_Configuration::publicKey('yfms9b7yf2nyr33y');
Braintree_Configuration::privateKey('c638c26dd85bd5e8f075800c358b28f9');
        ?>

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css">
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
      <h1>Hello there! This is a PHP site</h1>
      <div class="button-group">
        <a href="index.php" class="button success">Start Over</a>
      </div>
