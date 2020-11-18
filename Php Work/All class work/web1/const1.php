<?php
class Phone
{
  protected $Contacts;
}


class Mobile extends Phone
{
  public $Name;
  public $Price;
  public $OS;

  const BATTERY_COUNT = 1;

  function __construct($name, $price, $os, $contacts = "")
  {
     parent::Contacts = "";
     $this->Name = $name;
     $this->Price = $price;
     $this->OS = $os;
  }

  function getbattery()
  {
    echo self::BATTERY_COUNT . " hi battery hay";
  }
}

$mob1 = new Mobile("Samsung JX 100T", 256875, "Android 13");
echo "May nay $mob1->Name mobile $mob1->Price may khareeda hay, iss may $mob1->OS installed hay.";

 ?>
