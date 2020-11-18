<?php

 include("dbcon.php");

 move_uploaded_file($_FILES['image1']["tmp_name"], 'uploading/'.$_FILES['image1']["name"]);

 //PARAMETRIC QUERY
 $query = $pdo->prepare("insert into products (Name,Price,Details, photo) values (:name, :price, :details, :photo)");
 $query->bindparam("name", $_POST['name'], PDO::PARAM_STR);
 $query->bindparam("price", $_POST['price'], PDO::PARAM_INT);
 $query->bindparam("details", $_POST['details'], PDO::PARAM_STR);
 $query->bindparam("photo", $_FILES['image1']["name"], PDO::PARAM_STR);

 $query->execute();

 //redirection to page.
 header("location: pdo1.php");

 ?>
