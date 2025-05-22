<?php
declare(strict_types=1);

namespace App\coffee;

trait LatteTrait {

    public function makeLatte(){
        echo static::class . ' is making Latte by Trait'. PHP_EOL;
    }
}