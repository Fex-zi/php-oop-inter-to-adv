<?php

declare(strict_types=1);

namespace App\sum;

class Test
{

    public function __construct(
        private float $money,
        private string $words
    ) {}

    public function sum(float $sum)
    {

        $this->money +=  $sum;
        return $this;
    }
    public function cash(): float
    {
        return $this->money;
    }
}
