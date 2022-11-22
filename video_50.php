<?php

require_once 'vendor/autoload.php';

$invoice1 = new \App\Invoice2(25, 'My Invoice');
$invoice2 = new \App\Invoice2(25, 'My Invoice');

1== true;

echo 'invoice1 == invoice2' .PHP_EOL;
var_dump($invoice1==$invoice2);

echo 'invoice1 === invoice2' .PHP_EOL;
var_dump($invoice1===$invoice2);
