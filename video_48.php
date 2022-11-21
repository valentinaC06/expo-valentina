<?php

require_once 'vendor/autoload.php';

$coffeeMaker =new \App\CoffeeMaker();
$coffeeMaker->makeCoffee();

$latteMaker = new App\LatteMaker();
$latteMaker-> makeCoffee();
$latteMaker->makeLatte();

$cappuccino = new App\CappuccinoMaker();
$cappuccino-> makeCoffee();
$cappuccino-> makeCappuccino();

$allInOneCoffeeMaker = new App\AllInOneCoffeeMaker();
$allInOneCoffeeMaker-> makeCoffee();
$allInOneCoffeeMaker-> makeLatte();
$allInOneCoffeeMaker->makeOriginalLatte();
$allInOneCoffeeMaker-> makeCappuccino();