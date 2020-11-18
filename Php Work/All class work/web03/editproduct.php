<?php

 include("dbcon.php");

  $query = $pdo->query("select * from products where id=" . $_GET['id']);
  $row = $query->fetch(PDO::FETCH_ASSOC);

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </head>
  <body class="container">
    <h1>Edit Product</h1>
    <form class="form" action="saveproduct.php" method="post">
      <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
      <div class="form-group col-12">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $row['Name']; ?>">
      </div>
      <div class="form-group col-12">
        <label for="">Price</label>
        <input type="text" name="price"  class="form-control" value="<?php echo $row['Price']; ?>">
      </div>

      <div class="form-group col-12">
        <label for="">Details</label>
        <input type="text" name="details"  class="form-control" value="<?php echo $row['Details']; ?>">
      </div>
      <input type="submit" name="btn" class="btn btn-info" value="Save Product">
    </form>
  </body>
</html>
