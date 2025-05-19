<?php

declare(strict_types=1);

require_once 'Transaction.php';

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


var_dump($transaction);
