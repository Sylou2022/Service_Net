<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal_Paiement</title>
    <script src="paypal.js"></script>
    <link rel="icon" href="favicon.ico" />
</head>

<body>
  <br><br><br><br>
<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=AcG3R-wBgmoQWaLTI3fdXoQXZ_yYQo1sLdjH17dFHfJ-oMjBM6o3xhbKL1n4BWauYLFKTZVUqGDebmR3&currency=EUR" data-sdk-integration-source="button-factory"></script>
  
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"EUR","value":1}}]
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
  <br><br>
  <div style="text-align: center;">
  <a href="Espace_User.php"> <button type="button" class="btn btn-outline-warning" style="color: black;background:orange;"> SORTIR</button></a>
  </div>
</body>

</html>