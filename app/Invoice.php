<?php

namespace App;

class Invoice
{
    public function __get(string $name)
    {
       var_dump($name);
    }
}