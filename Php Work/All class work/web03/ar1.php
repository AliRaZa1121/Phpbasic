<?php
function br()
{
  echo "<br>";
}
 ?>


<?php
  $names = ["ali", "raza", "basit"];

  echo count($names);
 ?>

 <?php
  br();

  $marks = [85, 95, 75];
  $total = array_sum($marks);
  echo $total;
  ?>

  <?php
  sort($names);
br();
  var_dump($names);

   ?>

   <?php
   arsort($marks);
   br();
   var_dump($marks);
    ?>


    <?php
          $pr201903b = ["ali", "saad", "farhan"];
          $pr201811b1 = ["zeeshan", "hamza"];

          $pr201903b_201811b1 = array_merge($pr201903b, $pr201811b1);

          br();
          var_dump($pr201903b_201811b1);

     ?>


     <?php
      $colors = ["yellow", "blue", 'white', "black", "orange"];

      var_dump(array_slice($colors, 4, 1));
      ?>
