<?php

namespace App;

class CollectionAgency implements AnotherInterface,DebtCollector
{
    public const MY_CONSTANT = 2;
    public function __construct()
    {
    }

    public function collect(float $owedAmount): float
    {
        $guaranteed = $owedAmount * 0.5;

        return mt_rand($guaranteed, $owedAmount);
    }

    public function foo()
    {
        // TODO: Implement foo() method.
    }
}