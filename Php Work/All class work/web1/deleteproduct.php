<?php
include("conn.php");

$query = $pdo->prepare('delete  from products  where id=:id');

$query->bindparam("id", $_GET['id'], PDO::PARAM_INT);

$query->execute();

header("location: pdo1.php");

 ?>
