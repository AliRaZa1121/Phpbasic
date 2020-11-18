<?php
    $names = ['ali', 'tariq', 'jamal'];
    $total = count($names);
    echo "There are $total items in array"; // 3

 ?>

<?="<hr>"?>
<?="<h3>Sum</h3>"?>
<?php
      $salaries = [20000, 30000, 35000];
			echo "Sum of all salaries." . array_sum($salaries); // 85000
 ?>

 <?="<hr>"?>
 <?="<h3>Sort</h3>"?>
 <?php
      $salaries = [200000, 30000, 35000];
      sort($salaries);// 30000, 35000, 200000
      var_dump($salaries);
  ?>


  <?="<hr>"?>
  <?="<h3>Reverse Sort(arsort)</h3>"?>
  <?php
       $salaries = [200000, 30000, 35000];
       arsort($salaries);// 200000, 35000, 30000,
       var_dump($salaries);
   ?>


<?php
function br()
{
  echo "<br>";
}

 ?>

   <?="<hr>"?>
   <?="<h3>Array Slicing</h3>"?>
   <?php
          $names = ['ali', 'tariq', 'jamal', 'saad'];
          var_dump(array_slice($names, 2, 2)); // jamal, saad
          br();
          var_dump(array_slice($names, 0, 2)); // ali, tariq
          br();
          var_dump($total);
    ?>
