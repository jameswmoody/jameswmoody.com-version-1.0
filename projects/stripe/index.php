<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page Title</title>
  <link rel = "stylesheet" type = "text/css" href = "http://jameswmoody.com/reset.css" />
  <link href="http://jameswmoody.com/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php 
require_once('stripe-php/init.php');
$stripe = array(
  "secret_key"      => "sk_test_o5ymOpG4vk0gYtgOm9jZOGaU",
  "publishable_key" => "pk_test_uoZ2YjqsJuCcvEVnvk0WOizt"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>

<form action="charge.php" method="POST">
  <input type="text" name="invoice" placeholder="Invoice ID" value="<?php echo $invoice;?>"></input>


  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_uoZ2YjqsJuCcvEVnvk0WOizt"
    data-amount="1000"
    data-currency="gbp"
    data-name="JamesWMoody.com"
    data-description="Checkout"
    data-image="https://www.galleriashoppingcentre.com.au/img/genericLogo.jpg?width=300&height=300"
    data-locale="auto"
    data-zip-code="true">
  </script>
</form>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://jameswmoody.com/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>