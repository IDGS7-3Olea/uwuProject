<h1>home</h1>

<!--
<div id="smart-button-container">
  <div style="text-align: center;">
    <div id="paypal-button-container"></div>
  </div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=ARjzYC5RzK17ZXCgYkg_QTtH1NYJwfJNKwi3sQK3PKXnVYlbsefxpxa_923Vn6sxRzNjnaY-3TqyZOR5&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
  
</script>
-->

<!-- Pago con PayPal -->
<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=AeUHiiTZb9g3omOMjgombubbfzt4S4-9xqx2HOQCTXJVR-gi2CKW4hel9PwouqL5Dd_H6w5PsyKoFUJH&enable-funding=venmo&currency=MXN" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'black',
          layout: 'horizontal',
          label: 'buynow',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"MXN","value":200}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>

<script type="text/javascript" src="./scripts/home.js?v1.0.0"></script>