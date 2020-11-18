<?php

  $uemail     = $_POST["email"];
  $upassword  = $_POST["password"];

 // echo " mail: $uemail , password:  $upassword  <br>";



  include("dbcon.php");

  $query = $pdo->prepare("select * from users where email=:email and password=:password");
  $query->bindparam('email', $uemail, PDO::PARAM_STR);
  $query->bindparam('password', $upassword, PDO::PARAM_STR);

  $query->execute();
  $user = $query->fetch(PDO::FETCH_ASSOC);

  //var_dump( $user);
  if ($user) {
    session_start();
    $_SESSION['id'] = $user['Id'];
    //header("location: usersecurepage.php");
    echo "welcome";
  }
  else {
    echo "Sorry, invalid credentials.";
  }

 ?>
