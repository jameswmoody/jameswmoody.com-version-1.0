      <footer class="sign-off">

         <h4>Debug Section</h4>
          <div class="braintree-debug">
            <div class="braintree-label">Variable Dump</div>
            <h5 class="debug-heading">Imported Server Config, from ../keys.json</h5>
            <pre><?php print_r($APIkeys); ?></pre>

            <h5 class="debug-heading">Display POST Variable</h5>
            <pre><?php print_r($_POST); ?></pre>

            <h5 class="debug-heading">Result Variable</h5>
            <pre><?php print_r($result); ?></pre>

            <h5 class="debug-heading">Decoded clientToken</h5>
            <pre><?php print_r(base64_decode($clientToken)); ?></pre>
          </div>

      </footer>
    </body>
</html>
