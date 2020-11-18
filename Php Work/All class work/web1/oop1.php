<?php
  class Car
  {
    public $model;
    const noofwheel = 4;

    public function Run()
    {
      echo " and car is running file";
    }
  }

  class SportsCar extends Car
  {

  }

  $c1 = new SportsCar;
  $c1->model = "2002";

  echo "Meray pass $c1->model ki car hay.";
  echo "iss may ". $c1::noofwheel . " wheels hain.";

  $c1->Run();

 ?>
