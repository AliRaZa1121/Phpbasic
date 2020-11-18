<?php
  include("dbcon.php");


  $name = $_POST['name'];
  $price = $_POST['price'];
  $details = $_POST['details'];

  move_uploaded_file($_FILES['image1']["tmp_name"], "uploading/". $_FILES['image1']['name']);

  $query = $pdo->prepare("insert into products(Name, Price, Details, Photo) values(:name, :price, :details, :photo)");

  $query->bindparam('name', $name, PDO::PARAM_STR);
  $query->bindparam('price', $price, PDO::PARAM_INT);
  $query->bindparam('details', $details, PDO::PARAM_STR);
  $query->bindparam('photo', $_FILES['image1']['name'] , PDO::PARAM_STR);
  $query->execute();

  header('location: pdo1.php');

 ?>
