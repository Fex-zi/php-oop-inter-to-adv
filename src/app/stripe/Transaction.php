<?php

declare(strict_types=1);

namespace App\stripe;



class Transaction
{
    private static int $count = 0; // they are global variable

    public function __construct(
        private float $amount,
        private string $description
    ) {
        self::$count ++;
    }

      public function process(){
        echo 'Processing Paddle transaction...';
    }

    public static function getCount(): float{
        return self::$count;
        //$this dont work for static object, but self would
    }
    // private float $amount;
    // private string $description;

    // public function __construct(
    //     private float $amount,
    //     private string $description
    // ) {

    //     $this->amount = $amount;
    //     $this->description = $description;
    // }

  

    // public function addTax(float $rate): Transaction
    // {
    //     $this->amount += $this->amount * $rate / 100;
    //     return $this;
    // }

    // public function applyDiscount(float $rate): Transaction
    // {
    //     $this->amount -= $this->amount * $rate / 100;

    //     return $this;
    // }
    // public function getAmount(): float
    // {

    //     return $this->amount;
    // }

    // public function __destruct()
    // {
    //     echo 'Destruct ' . $this->description . '</br>';
    // }
}

// class Transaction{

//     public const STATUS_PAID ='paid';
//     public const STATUS_PENDING ='pending';
//     public const STATUS_DECLINED ='declined';
//     private string $status;

//     public function __construct(){
//         $this->setStatus('pending');

//         var_dump(self::STATUS_PAID);

//     }
 
//     public function setStatus(string $status): self {
//     $this->status = $status;
//     return $this;
//  }


// }