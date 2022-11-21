<?php

use App\MyInterface;

require_once 'vendor/autoload.php';

//clases anonimas//

 $obj = new class(1,2,3) implements MyInterface{

    public function __construct(public int $x,public int $y,public int $z)
    {
    }

 };
 //comprobar que las clases anonimas aun asi reciben un nombre
 //var_dump(get_class($obj));

foo($obj);
 function foo(MyInterface $obj)
 {
    var_dump($obj);
 }