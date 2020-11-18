<?php
  include("dbcon.php");

  $name = $_POST['name'];
  $price = $_POST['price'];
  $details = $_POST['details'];
  $id = $_POST['id'];

  $query = $pdo->prepare("update Products set Name=:name,Price=:price, Details=:details where Id=:id ");

  $query->bindParam(':id', $id, PDO::PARAM_INT);
  $query->bindParam(':name', $name, PDO::PARAM_STR);
  $query->bindParam(':price', $price, PDO::PARAM_INT);
  $query->bindParam(':details', $details, PDO::PARAM_STR);
  $query->execute();

  header('location: pdo1.php');

 ?>
