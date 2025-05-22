<?php
declare(strict_types=1);

// require_once '../app/stripe/Transaction.php';
// require_once '../app/sum/Test.php';

// spl_autoload_register(function ($class) {
//     // Convert namespace separators to directory separators
//     $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
    
//     if(file_exists($path)){
//     require $path;
//     }
// });

require __DIR__ .'/../vendor/autoload.php';

use App\stripe\Transaction;

use App\sum\Test;

use App\Toaster;
//use App\ToasterPro;



$check = new App\coffee\CoffeeMaker;
$check2 = new App\coffee\LatteMaker;
$cap = new App\coffee\CappuccinoMaker;
$all = new App\coffee\AllCoffeeMaker();

echo $check->makeCoffee(). '</BR>';
echo $check2->makeLatte(). '</BR>';
echo $check2->makeCoffee().'</br>';
echo $cap->makeCappuccino().'</br>';

echo $all->makeLatte(). '</br>';
echo $all->makeCappuccino();





// $transaction = new Transaction(100, 'Transaction 1');

// $transaction->addTax(8)->applyDiscount(10);

// var_dump($transaction->getAmount());

// $transaction2 = (new Transaction(200, 'Transaction 2'))
//     ->addTax(8)
//     ->applyDiscount(15)
//     ->getAmount();

// var_dump($transaction, $transaction2);

// $transaction = (new Transaction(100, 'Transaction 1'))
//     ->addTax(8)
//     ->applyDiscount(10)
//     ->getAmount();


//var_dump($transaction . "</br>");

// $transaction = new Transaction();
// //echo $transaction::STATUS_PAID;
// echo Transaction::class . "</br>";

// $ifyCash = (new Test(20, 'Let\'s test'))
//     ->sum(10)
//     ->cash();

// var_dump($ifyCash. "</br>");


// $transaction = (new Transaction(100, 'Transaction 1'));

// var_dump($transaction);

 echo "</br>";

//  $toaster = new App\ToasterPro();

//  $toaster->addSlice('bread');
//  $toaster->addSlice('bread');
//  $toaster->addSlice('bread');
//  $toaster->addSlice('bread');
//  $toaster->addSlice('bread');
//  $toaster->toastBagel();

//  $toaster = (new Toaster())->addSlice('bread')->toast();
