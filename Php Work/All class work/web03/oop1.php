<?php
/**
 *
 */
class Car
{
   const speed = 3.14;
   public $name;
   $cost  = 33333;
   public function Cost()
   {
     return $cost;
   }
}

$c1 = new Car;
$c1->name = "Toyota Corolla";
echo $c1->name;
echo $c1::speed;

//  => fat arrow
// -> slim arrow
// . (dot) in C#       is      -> in php

 ?>
