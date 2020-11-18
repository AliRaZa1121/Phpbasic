<?php
  $myname = "";

  function foobar()
  {
    $GLOBALS['myname'] = "mazhar"; //aik global variable banaya.

    // takay bahar bhi use ho sakay.  
  }

  foobar();
  echo $myname;

 ?>
