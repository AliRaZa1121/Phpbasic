<?php
class Mobile
{
  public $OS; //Property
  public $Infrared;
  const ScreenFixed = true;

  public function TurnOn()
  {
    echo "<br>Mobile Starting<br> Welcome.";
  }
}

$mob1 = new Mobile;
$mob1->OS = "Android 10";
$mob1->Infrared = true;
echo "OS: " . $mob1->OS  . "<br>";

$mob2 = new Mobile;
$mob2->OS = "IOS 9";
echo Mobile::ScreenFixed;
$mob2->TurnOn();
 ?>
