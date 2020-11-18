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
     <a href="newproduct.php" class="btn btn-info">Create New Product</a>
     <table class="table table-borded table-hover table-striped">
       <thead>
         <tr>
           <th></th>
           <th>Name</th>
           <th>Price</th>
           <th>Details</th>
           <th></th>
         </tr>
       </thead>
       <tbody>

         <?php

          include("dbcon.php");

           $query = $pdo->query("select * from products");
           $rows = $query->fetchAll(PDO::FETCH_ASSOC);

           if(count($rows) > 0) {
            foreach ($rows as $row) {
              ?>
                  <tr>
                    <td> <img src="uploading/<?php echo $row['Photo']; ?>" alt="" width="150px"> </td>
                    <td> <?php echo $row['Name']; ?></td>
                    <td> <?php echo $row['Price']; ?></td>
                    <td> <?php echo $row['Details']; ?></td>
                    <td>
                      <a href="editproduct.php?id=<?php echo $row['Id']; ?>" class="btn btn-warning">Edit</a>
                      <a href="deleteproduct.php?id=<?php echo $row['Id']; ?>" class="btn btn-danger">Delete</a>
                     </td>
                  </tr>
              <?php
            }
          }
          else {
            ?>
               <tr><td colspan="4" style="text-align: center;">No Record found.</td></tr>
          <?php
          }
        ?>

       </tbody>
     </table>
   </body>
 </html>
