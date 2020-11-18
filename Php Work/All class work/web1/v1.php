<?php

function br()
{
  echo "<br>";
}
/*
  //local variable
  function foobar()
  {
    $a = 1;
    echo $a;
  }

  foobar();


function shoebar()
{
  $b = 1;
}

shoebar();
echo $b;
*/

echo $_SERVER['SERVER_SOFTWARE'];
br();
echo $_SERVER['SERVER_ADDR'];

br();
echo $_SERVER['SCRIPT_FILENAME'];

 ?>
