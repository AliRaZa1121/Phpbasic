<?php
  class Student
  {
    public $Name;
    public $Email;

    public function __construct($name, $email)
    {
      $this->Name = $name;
      $this->Email = $email;
    }
  }

  $s1 = new Student("ali", "ali@gmail.com");

  echo $s1->Name;
 ?>
