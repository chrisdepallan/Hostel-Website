<?php
session_start();
$_SESSION['total']=100;
$_SESSION['name']='rims';
require_once('../vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_51MiftOSIxs4ZUV5mMRwCJZPY6Sa5xxQjwNW7j3NZ7Z0uAMdOZpfkJ8z5PXEvGURVzOkilzvmrTPVpn8vkZT7embw00HJuQCUXf');

$session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'inr',
      'product_data' => [
        'name' => $_SESSION['name'],
      ],
      'unit_amount' => $_SESSION['price']*100,
    ],
    'quantity' => $_SESSION['quantity'],
  ]],
  'mode' => 'payment',
  'success_url' => 'http://localhost/s6/home/order.php',
  'cancel_url' => 'http://localhost/s6/home/index.php',
    
]);

?>
<!-- 
'number' => '4242424242424242',
    'exp_month' => 8,
    'exp_year' => 2023,
    'cvc' => '314', -->
<html>
  <head>
    <title>Payment Gateway</title>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body>
    <script>
      var stripe = Stripe('pk_test_51MiftOSIxs4ZUV5mGY682okBEOestzsBy3szXWnqNdROwoL6id38RCfiYaUcSsspTDjn78brHkgFcZ6qGAhRwd8Y00ImtcmHeK');
      const btn = document.getElementById("checkout-button")
        stripe.redirectToCheckout({
          sessionId: "<?php echo $session->id; ?>"
        });
    </script>
  </body>
</html>