<?php

 class Animal
 {
    public $name;
    public function Eat()
    {
       echo "animal eating <br>";
    }
 }

 class Elephant extends Animal
 {

 }

 class Dog extends Animal
 {

 }

$d = new dog;
$d->name = "shamooo";

$d->Eat();
echo $d->name;

 ?>
