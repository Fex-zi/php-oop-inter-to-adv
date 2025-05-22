<?php
declare(strict_types=1);

namespace App\coffee;

class CoffeeMaker {

    public function makeCoffee(){
        echo static::class . ' is making Coffee'. PHP_EOL;
    }
}