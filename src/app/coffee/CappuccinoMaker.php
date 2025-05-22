<?php
declare(strict_types=1);

namespace App\coffee;

class CappuccinoMaker extends CoffeeMaker {

    public function makeCappuccino(){
        echo static::class . ' is making Cappuccino'. PHP_EOL;
    }
}