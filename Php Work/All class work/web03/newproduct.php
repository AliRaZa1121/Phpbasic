
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
    <form class="form" action="savenewproduct.php" enctype="multipart/form-data" method="post">
      <input type="hidden" name="id" value="">
      <div class="form-group col-12">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" value="">
      </div>
      <div class="form-group col-12">
        <label for="">Price</label>
        <input type="text" name="price"  class="form-control" value="">
      </div>

      <div class="form-group col-12">
        <label for="">Details</label>
        <input type="text" name="details"  class="form-control" value="">
      </div>
      
      <div class="form-group col-12">
        <label for="">select image</label>
        <input type="file"  class="form-control"  name="image1" value="">
      </div>




      <input type="submit" name="btn" class="btn btn-info" value="Save new Product">
    </form>
  </body>
</html>
