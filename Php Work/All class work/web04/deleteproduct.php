<?php
  include("dbcon.php");

  $id = $_GET['id'];

  $query = $pdo->prepare("delete from Products  where Id=:id ");
  $query->bindParam(':id', $id, PDO::PARAM_INT);
  $query->execute();

  header('location: pdo1.php');

 ?>
