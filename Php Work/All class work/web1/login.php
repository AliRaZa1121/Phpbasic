<?php 


if ( isset($_POST) ) {
	$email = $_POST['email'];
	$password = $_POST['password'];


 	include("conn.php");

    $query = $pdo->prepare("select * from users where email=:email and password=:password");

    $query->binparam('email', $email, PDO::PARAM_STR);
    $query->binparam('password', $password, PDO::PARAM_STR);

    $query->execute();

    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user) {
    	session_start();
       $_SESSION =	 $user['Id'];
       header("location: pdo1.php");

    }
    else
    {
    	echo "sorr wrong credential.";
    }
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body class="container">
	<form class="form" action="" method="post">
		<div class="form-group">
			<label>
				Email
			</label>
			<input class="form-control" type="email" name="email">
		</div>
		<div class="form-group">
			<label>
				Password
			</label>
			<input class="form-control" type="password" name="password">
		</div>
		<div>
			<input type="submit" class="btn btn-info" name="btn1" value="Login">
		</div>
	</form>
</body>
</html>