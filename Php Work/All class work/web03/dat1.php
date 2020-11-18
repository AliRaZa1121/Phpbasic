<?php 


	date_default_timezone_set("Asia/Karachi");
	echo 'Today is: ' . date('d/m/Y');	

	echo "<br>"	;

	echo date('h:i a');

	echo "<br>"	;

	echo "2 haftay baad ki date: " . date('d/m/Y', strtotime('+15 days'));

	//difference b/w two dates

	$dat1 = date_create('1947-08-14');    // custom date
	$dat2 = date_create(date('Y-m-d')); // current date

	$diff = date_diff($dat2, $dat1);

	echo "<br>"	;

	//	var_dump($diff);

	echo "Pakisan banay hoay " . $diff->y . " saal, " . $diff->m . " months " . $diff->d . " days ho chukay hain."; 

 ?>