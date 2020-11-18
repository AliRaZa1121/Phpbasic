<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body class="container">
    <h2>Add New Product</h2>
    <form class="form" action="savenewproduct.php" method="post"  enctype="multipart/form-data">

        <div class="form-group col-12">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="">
        </div>
        <div class="form-group col-12">
          <label>Price</label>
          <input type="text" class="form-control" name="price" value="">
        </div>
        <div class="form-group col-12">
          <label>Details</label>
          <input type="text" class="form-control" name="details" value="">
        </div>

        <div class="form-group col-12">
          <label>select File</label>
            <input type="file" class="form-control" name="image1" value="">
        </div>
<div class="form-group col-12">


        <input type="submit" name="btn1" class="btn btn-info" value="Save">

      </div>
    </form>
  </body>
</html>
