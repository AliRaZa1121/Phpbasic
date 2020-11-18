<?php

   class Animal
   {
     public $Color;
     public $Price;

   }

   class Dog extends Animal
   {

   }


   class Cat extends Animal
   {

   }


   $d1 = new Dog;
   $d1->Color = "black";

   $c1 = new Cat;
   $c1->Color = "White";


   $c2 = new Cat;
   $c2->Color = "Gray";

   echo $c1->Color;




 ?>
