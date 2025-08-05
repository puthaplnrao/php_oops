<?php
abstract class PaymentGateway
{
    abstract public function pay($amount);

    public function validateAmount($amount)
    {
        return $amount > 0;
    }
}
