<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<ol>
		<?php
				$students = ["ali", "rohail", "ghulam"];  //php 7

				foreach($students as $item)
				{
					echo "\t<li>$item</li>\n";
				}

		 ?>
	 </ol>
	</body>
</html>
