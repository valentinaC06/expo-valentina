<?php

namespace App;

class Invoice
{
   protected array $data = [];

  public function __get(string $name)
  {
     if(array_key_exists($name, $this ->data)){
        return  $this->data[$name];
      }
      return null;
   }

   public function __set(string $name, $value): void
   {
     $this ->data[$name] = $value;
   }
   public function __isset(string $name): bool
  {
       var_dump('isset');
      return array_key_exists($name, $this->data);
  }

  public function __unset(string $name): void
   {
       var_dump('unset');
 unset($this->data[$name]);
}

//inicio metod call

public function __call(string $name, array $arguments)
{
    var_dump($name, $arguments);
}
public static function __callStatic(string $name, array $arguments)
{
    var_dump('static', $name, $arguments);
}
//metodo to String

public function __toString():string
{
    return 'hello world';
}
//metodo invoke

public function __invoke()
{
    var_dump('invoked');
}
}