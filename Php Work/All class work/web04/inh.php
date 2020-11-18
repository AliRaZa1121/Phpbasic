<?php

class Animal
{
  public $color;
}

class Dog extends Animal
{

}

class Cat extends Animal {

}

$d1 = new Dog;
$d1->color = "black";

echo "My dog color is $d1->color";

 ?>
