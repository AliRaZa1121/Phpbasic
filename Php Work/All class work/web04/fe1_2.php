<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<select>

		<?php
				$students = ["ali", "rohail", "ghulam"];  //php 7

				foreach($students as $item)
				{
					echo "\t<option>$item</option>\n";
				}

		 ?>
	 </select>
	</body>
</html>
