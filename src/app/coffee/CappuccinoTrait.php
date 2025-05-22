<?php
declare(strict_types=1);

namespace App\coffee;


   trait CappuccinoTrait{
    public function makeCappuccino(){
        echo static::class . ' is making Cappuccino, yumm'. PHP_EOL;
    }
}