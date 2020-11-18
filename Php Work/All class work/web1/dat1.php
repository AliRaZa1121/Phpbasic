<?php 

date_default_timezone_set('Asia/Karachi');
echo "Today is :" . date('d/m/Y');
echo "<br>";
echo date('l, d M Y');

echo "<br>";

echo date("h:i:s a");

echo "<br>";

echo date('d/m/Y', strtotime('+3 days'));

echo "<br>";
echo date('d/m/Y', strtotime('-3 weeks'));

$dat1 = date_create('1947-08-14');

$dat2 = date_create(date('Y-m-d'));

$diff = date_diff($dat2, $dat1);

echo "<br>";

echo "pakistn azad hoay <b>" . $diff->y . "</b> sal ho gai";

?>