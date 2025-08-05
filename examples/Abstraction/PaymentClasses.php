<?php
class StripePayment extends PaymentGateway
{
    public function pay($amount)
    {
        if (!$this->validateAmount($amount)) {
            echo "Invalid amount\n";
            return;
        }
        // Simulate API call to Stripe
        echo "Paying ₹$amount using Stripe.\n";
    }
}

class PayPalPayment extends PaymentGateway
{
    public function pay($amount)
    {
        if (!$this->validateAmount($amount)) {
            echo "Invalid amount\n";
            return;
        }
        // Simulate API call to PayPal
        echo "Paying ₹$amount using PayPal.\n";
    }
}
