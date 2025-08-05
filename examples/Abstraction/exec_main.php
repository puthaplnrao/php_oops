<?php
include_once 'Abstract.PaymentGateway.php';
include_once 'PaymentClasses.php';
function processPayment(PaymentGateway $gateway, $amount)
{
    $gateway->pay($amount);
}

// Choose the gateway dynamically
$paymentMethod = new StripePayment();
$paymentPayPalMethod = new PayPalPayment();

processPayment($paymentMethod, 999);
processPayment($paymentPayPalMethod, 10);
