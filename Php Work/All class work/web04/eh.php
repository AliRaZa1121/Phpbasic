<?php error_reporting(E_ERROR) ?>

<?php

  $a = 10;
  $b = 0;

  if ($b==0) {
    trigger_error("zero say devide nahin kar saktay", E_USER_ERROR);
  }


    $c = $a/ $b;
    echo $c;
 ?>
