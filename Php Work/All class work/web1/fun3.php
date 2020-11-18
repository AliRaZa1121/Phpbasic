<?php

function logo($width="300px")
{
  echo "<img style='width:$width;' src='https://i.picsum.photos/id/1023/536/354.jpg?hmac=q17Uvpe-LDdjeCkEbPPP9qjcYpxVPRpzdTeloXPZaVY'/>";
}


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <?php logo() ?>
    </header>
  </body>
</html>
