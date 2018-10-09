<?php

class BankAccount implements IfaceBankAccount
{

    private $balance = null;

    public function __construct(Money $openingBalance)
    {
        $this->balance = $openingBalance;
    }

    public function balance()
    {
        return $this->balance;
    }

    public function deposit(Money $amount)
    {
        //implement this method
        (string) $this->balance = (string)$this->balance + 
        (string)$amount;         
    }

    public function transfer(Money $amount, BankAccount $account)
    {
        //implement this method
        (string) $account->balance = (string) 
        $account->balance + (string) $amount;

        (string)$this->balance = (string)$this->balance - 
         (string)$amount;

    }

    public function withdraw(Money $amount)
    {
        if((string)$this->balance > (string)$amount)
        {
            (string)$this->balance = (string)$this->balance - (string)$amount;
        }
    }
}