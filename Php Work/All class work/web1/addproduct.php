 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title></title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 </head>
   <body class="container">
     <h1>Add New Product</h1>
     <form class="" action="savenewproduct.php" method="post"  enctype="multipart/form-data">
     <input type="hidden" name="id" value="<?php echo $row["Id"] ?>">

       <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" name="name" value="" placeholder="Product Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Price</label>
      <input type="number" class="form-control" name="price" value="" placeholder="Product Price">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Details</label>
    <input type="text" class="form-control" name="details" value="" placeholder="details......">
  </div>

  <div class="form-group">
    <label for="inputAddress">Select Image</label>
   <input type="file" name="image"  class="form-control" />
  </div>

  <div class="form-group">
    <label for="inputAddress">Category</label>
    <select class="form-control" name="categoryid">

      <?php

        include("conn.php");

        $query = $pdo->query("Select * from Categories");

        $rows = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row) {
          ?>
              <option value="<?php echo $row['Id'] ; ?>"><?php echo $row['Name'] ; ?></option>

        <?php
        }
         ?>


    </select>
  </div>







  <button type="submit" class="btn btn-primary">Save New Product</button>

     </form>
   </body>
 </html>
