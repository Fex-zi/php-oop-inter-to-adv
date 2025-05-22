<?php
declare(strict_types=1);

namespace App\coffee;

class AllCoffeeMaker extends CoffeeMaker{

    use LatteTrait;
    use CappuccinoTrait;

}