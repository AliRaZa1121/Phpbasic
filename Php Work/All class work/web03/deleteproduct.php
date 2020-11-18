<?php

 include("dbcon.php");

 //PARAMETRIC QUERY
 $query = $pdo->prepare('delete from products  where id=:id');
 $query->bindparam(":id", $_GET['id'], PDO::PARAM_INT);

 $query->execute();

 //redirection to page.
 header("location: pdo1.php");

 ?>
