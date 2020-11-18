<?php
include("conn.php");

$query = $pdo->prepare('update products set Name=:name, Price=:price, Details=:details where id=:id');

$query->bindparam("name", $_POST['name'], PDO::PARAM_STR);
$query->bindparam("details", $_POST['details'], PDO::PARAM_STR);
$query->bindparam("price", $_POST['price'], PDO::PARAM_INT);
$query->bindparam("id", $_POST['id'], PDO::PARAM_INT);

$query->execute();

header("location: pdo1.php");

 ?>
