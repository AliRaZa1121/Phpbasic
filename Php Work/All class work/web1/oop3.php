<?php

class html
{
  public function h1($content="")
  {
    echo "<h1>$content</h1>";
  }
  public function br(int $cnt = 1)
  {
    for ($i=0; $i < $cnt; $i++)
    {
      echo "<br>";
    }

  }
}

$html = new html;

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php
     $html->h1("salam");
     $html->br(50);
     $html->h1("layani");
     ?>


   </body>
 </html>
