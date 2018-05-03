<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_VwvN6PETRG5csSE1Z422zNcM",
  "publishable_key" => "pk_test_USUERZswW9kanCZXAnijuSgF"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
