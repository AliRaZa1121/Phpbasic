<?php

include("dbcon.php");
$query = $pdo->query("Select * from Products");
$rows = $query->fetchall(PDO::FETCH_ASSOC);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <style>
.table td
{

  vertical-align: middle;
}
  </style>
   </head>
   <body class="container">
     <h1>Products</h1>
     <a href="createproduct.php" class="btn btn-info">Add New Product</a>
     <table class="table table-bordered table-hover table-striped">
       <thead>
         <tr>
           <th></th>
           <th>Id</th>
           <th>Name</th>
           <th>Price</th>
           <th>Details</th>
           <th></th>
         </tr>

       </thread>
       <tbody>
       <?php
        foreach ($rows as $row) {
          ?>
          <tr>
            <td style="    text-align: center;"> <img src="uploading/<?php echo $row['Photo'] ?>" width="150px" alt=""> </td>
            <td><?php echo $row['Id'] ?></td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['Price'] ?></td>
            <td><?php echo $row['Details'] ?></td>
            <td>
              <a href="editproduct.php?id=<?php echo $row['Id'] ?>" class="btn btn-info">Edit</a>
                <a href="deleteproduct.php?id=<?php echo $row['Id'] ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <?php
        }
        ?>
      </tbody>
     </table>
   </body>
 </html>
