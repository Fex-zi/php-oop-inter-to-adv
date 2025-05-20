<?php

declare(strict_types=1);

namespace App\stripe;

class Transaction
{
    public function __construct(
        private float $amount,
        private string $description
    ) {}

    // private float $amount;
    // private string $description;

    // public function __construct(
    //     private float $amount,
    //     private string $description
    // ) {

    //     $this->amount = $amount;
    //     $this->description = $description;
    // }

    public function addTax(float $rate): Transaction
    {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }

    public function applyDiscount(float $rate): Transaction
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }
    public function getAmount(): float
    {

        return $this->amount;
    }

    public function __destruct()
    {
        echo 'Destruct ' . $this->description . '</br>';
    }
}
