<?php
class BankAccount
{
    private $balance = 1000;

    public function getBalance()
    {
        return $this->balance;
    }
}

$account = new BankAccount();
echo $account->getBalance(); // ✅ Works
// echo $account->balance;   ❌ Error: private access
