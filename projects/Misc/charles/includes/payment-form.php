<form name="checkout" id="checkout" method="post" action="">

  <input name="products" id="Product 1" type="checkbox" value="2312" onChange="calcTotal()"><label for="Product 1">Checkbox 1 [23.12]</label>
  <input name="products" id="Product 2" type="checkbox" value="4123" onChange="calcTotal()"><label for="Product 2">Checkbox 2 [41.23]</label>
  <input name="products" id="Product 3" type="checkbox" value="1187" onChange="calcTotal()"><label for="Product 3">Checkbox 3 [11.87]</label>
  <input name="products" id="Product 4" type="checkbox" value="204600" onChange="calcTotal()"><label for="Product 4">Checkbox 4 [2046.00]</label>


  <div class="braintree-form">
    <div class="braintree-label">Braintree Drop-In UI</div>
    <div id="paypal-form"></div>
    <div id="payment-form"></div>
  </div>
  <label>How much monies?:<input type="text" name="checkoutValue" id="total-payment-amount"></label>
  <input type="hidden" id="nonceValue" name="nonceValue">
  <input type="submit" value="SEND THE MONIES" >
</form>

<script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="/js/braintree.js"></script>
<script>

function calcTotal() {
  document.checkout.checkoutValue.value = '';
  var sum = 0;
  for (i = 0;i < document.checkout.products.length; i++) {
    if ( document.checkout.products[i].checked ) {
      sum = sum + parseInt( document.checkout.products[i].value );
    }
  }
  document.checkout.checkoutValue.value = ( (sum / 100).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, "") );
};


  var clientToken = '<?php echo($clientToken); ?>';
  braintree.setup(clientToken, "dropin", {
    container: 'payment-form',

    onPaymentMethodReceived: function (obj) {
      document.getElementById('nonceValue').value =  obj.nonce; //take the nonce and inject the value into an input.value
      console.log(obj.nonce); //optional: print the nonce to console
      checkout.submit(); //with onPaymentMethodReceived, the form will not submit automatically and will need to be handled how ever you prefer.
    },

  });
</script>
