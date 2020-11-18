<?php 

if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'create':

			setCookie('email', 'layani.lamani@gmail.com', time() + 3600);
			echo "cookie created <br>";
			break;

		case 'delete':
			setCookie('email', '', time() - 500);
			echo "cookie deleted <br>";
			break;		
	
		case 'get':
			echo  'data in cookie : ' . $_COOKIE['email'] . "<br>";
			break;
	}
}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
	<a class="btn" href="cookie.php">Home</a> | 
	<a class="btn btn-info" href="cookie.php?action=create">Create Cookie</a> | 
<a class="btn btn-danger" href="cookie.php?action=delete">Delete Cookie</a> | 
<a class="btn btn-primary" href="cookie.php?action=get">Get & Print Cookie data</a>

</body>
</html>