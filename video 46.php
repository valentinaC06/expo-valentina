<?php
 require_once 'vendor/autoload.php';

 $invoice = new App\Invoice(15);

$invoice->amount = 15;

var_dump(isset($invoice->amount));

unset($invoice->amount);

var_dump(isset($invoice->amount));

//comienza con metodo magico de Call

$invoice->process(1, 2, 3);

App\Invoice::process(1,2,3);

//metodo toString

echo $invoice;

var_dump($invoice instanceof Stringable);

//metodo invoke

$invoice();