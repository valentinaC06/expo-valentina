<?php

namespace App;

interface DebtCollector extends AnotherInterface,OtherInterface
{
    public const MY_CONSTANT = 1;
    public function __construct();
    public function collect(float $owedAmount): float;
}