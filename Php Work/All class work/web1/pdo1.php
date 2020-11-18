<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body class="container">
    <h1>Products</h1>
    <a href="addproduct.php" class="btn btn-info">Create New Product</a>
    <table class="table table-borderd table-hover table-striped">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Price</th>
          <th>Details</th>
            <th>Category</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          <?php

            include("conn.php");

            $query = $pdo->query("SELECT products.*, categories.Name as categoryname FROM products join categories on categories.Id = products.CategoryId");

            $rows = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($rows as $row) {
              ?>
              <tr>
                <td>
                  <div style="background-position: center;width:150px;height:150px;background-image:url(uploaded/<?php echo $row["Photo"]?>)">

                  </div>
                   </td>
                <td><?php echo $row["Name"]?></td>
                <td><?=$row["Price"]?></td>
                <td><?=$row["Details"]?></td>
                <td><?=$row["categoryname"]?></td>
                <td>
                  <a href="editproduct.php?id=<?php echo $row["Id"]?>" class="btn btn-warning">Edit</a>
                  <a href="deleteproduct.php?id=<?php echo $row["Id"]?>" class="btn btn-danger">Delete</a>

                </td>
              </tr>
              <?php
            }

           ?>
      </tbody>
    </table>
  </body>
</html>
