<?php
  require_once('./config.php');

  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];

  $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 5000,
      'currency' => 'usd'
  ));
  echo "<pre>";
  print_r($customer);
  echo "</pre>";
  echo "<pre>";
  print_r($charge);
  echo "</pre>";
  echo '<hr>';
  echo '<h1>Successfully charged $5.00!</h1>';
?>
