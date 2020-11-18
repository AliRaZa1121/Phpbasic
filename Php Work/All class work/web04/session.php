<?php 

if (isset($_GET['op'])) {
	session_start();
	 switch ($_GET['op']) {
	 	case 'create': // login
	 		 $_SESSION['saad'] = "aptech";
	 		echo 'session created <br>';
	 		break;	 	
	 	case 'delete': // logout
	 		session_unset();
	 		session_destroy();
	 		echo 'session deleted <br>';
	 		break;	
	 	case 'get':  //session check	 		 
	 		if (isset($_SESSION['saad'])) {
	 			echo 'session data is: ' .  $_SESSION['saad'] . '<br>';
	 		}
	 		else
	 		{
	 			echo 'session is already abandoned.';
	 		}

	 		break;	 	
	 		
	 }
}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</head>
<body class="container">
	 
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="session.php" class="nav-link">Home</a>
			</li>
			<li class="nav-item">
				<a href="session.php?op=create" class="nav-link">Create Session</a>
			</li>
			<li class="nav-item">
				<a href="session.php?op=delete" class="nav-link">Delete Session</a>
			</li>
			<li class="nav-item">
				<a href="session.php?op=get" class="nav-link">Get & Print Session</a>
			</li>
		</ul>
	</nav>
	 
	
</body>
</html>