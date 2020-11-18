<?php
  $myname = "";

  function foobar()
  {
    global $myname;
    $myname = "mazhar";// local variable
    echo $myname;
  }

  foobar();
  echo $myname;

 ?>
