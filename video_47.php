<?php
require_once 'vendor/autoload.php';

//$ClassA = new \App\ClassA();
//$ClassB = new \App\ClassB();
//
//echo $ClassA->getName() .PHP_EOL;
//echo $ClassB->getName() .PHP_EOL;

echo \App\ClassA::getName() . PHP_EOL;
echo \App\ClassB::getName() . PHP_EOL;