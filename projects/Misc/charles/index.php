<?php include("includes/header.php"); ?>

<p>Lets get started!</p>


<div class="row">
  <div class="medium-6 columns end"></div>
</div>

<div class="row">
  <div class="medium-6 columns end">

    <form name="customerCreate" id="customerCreate" method="post" action="checkout.php">
         <h5>Payment Information</h5>
         <div class="input-group">
           <span class="input-group-label">Card Number:</span>
           <div id="cardNumber" class="input-group-field hostedField required"></div>
         </div>
         <div class="row">
          <div class="small-6 columns">
         <div class="input-group">
           <span class="input-group-label">Exp:</span>
           <div id="expirationDate" class="input-group-field hostedField"></div>
         </div>
          </div>
          <div class="small-6 columns">
         <div class="input-group">
           <span class="input-group-label">CVV:</span>
           <div id="cvv" class="input-group-field hostedField"></div>
         </div>
          </div>
         </div>
      </div>
      <br />
      <input type="submit" class="large button expanded" value="Pay $10">
    </form>

    <?php $clientToken = Braintree_ClientToken::generate(); ?>
    <script src="https://assets.braintreegateway.com/js/braintree-2.25.0.min.js"> </script>
    <script>
      braintree.setup('<?php echo($clientToken); ?>', 'custom', {
        id: 'customerCreate',
        hostedFields: {
          number: {
            selector: "#cardNumber",
            placeholder: "4111 1111 1111 1111"
          },
          cvv: {
            selector: "#cvv",
            placeholder: "213"
          },
          expirationDate: {
            selector: "#expirationDate",
            placeholder: "06/19"
          },
          styles: {
            'input': {
              'font-family': '"Courier New", monospace',
              'font-size': '16px',
              'font-weight': '200'
            }
          }
        }
      });

      //function that sets an input equal to another input with an onChange() function
      function setEqual(source, dest) {
         document.getElementById(dest).value = document.getElementById(source).value;
      };
    </script>

  </div>
</div>

<?php include("includes/footer.php"); ?>
