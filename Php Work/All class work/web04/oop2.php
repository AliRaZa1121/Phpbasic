<?php

class Student
{
    public $name;
    public $email;
    public $age;
}

$s1 = new Student;
$s1->name = "ali";
$s1->email = "ali@gmail.com";
$s1->age = 33;

$s2 = new Student;
$s2->name = "faraz";
$s2->email = "faraz@gamil.com";
$s2->age = 20;

var_dump($s1);

 ?>
