<?php

declare(strict_types=1);

require_once 'Transaction.php';
require_once 'Test.php';

use Fexzi\boss\Transaction;

use Ify\class\Test;



// $transaction = new Transaction(100, 'Transaction 1');

// $transaction->addTax(8)->applyDiscount(10);

// var_dump($transaction->getAmount());

// $transaction2 = (new Transaction(200, 'Transaction 2'))
//     ->addTax(8)
//     ->applyDiscount(15)
//     ->getAmount();

// var_dump($transaction, $transaction2);

$transaction = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();


var_dump($transaction . "</br>");

$ifyCash = (new Test(20, 'Let\'s test'))
    ->sum(10)
    ->cash();

var_dump($ifyCash);
