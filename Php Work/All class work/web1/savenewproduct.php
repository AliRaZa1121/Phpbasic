<?php
include("conn.php");

 move_uploaded_file($_FILES['image']["tmp_name"], 'uploaded/' . $_FILES['image']["name"]);

$query = $pdo->prepare('insert into products (Name, Price, Details, Photo, CategoryId) values(:name, :price, :details, :photo, :categoryid) ');

$query->bindparam("name", $_POST['name'], PDO::PARAM_STR);
$query->bindparam("details", $_POST['details'], PDO::PARAM_STR);
$query->bindparam("price", $_POST['price'], PDO::PARAM_INT);
$query->bindparam("photo", $_FILES['image']["name"], PDO::PARAM_STR);
$query->bindparam("categoryid", $_POST['categoryid'], PDO::PARAM_INT);
//categoryid

//categoryid

$query->execute();

header("location: pdo1.php");

 ?>
