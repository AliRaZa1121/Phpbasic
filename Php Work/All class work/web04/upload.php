<?php
//jub button press hoa/form submit hoa
if (isset($_POST['btn1'])) {

  move_uploaded_file($_FILES['image1']["tmp_name"], "uploading/". $_FILES['image1']['name']);

}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post" enctype="multipart/form-data">
      <input type="file" name="image1" value="">
      <input type="submit" name="btn1" value="Upload">
    </form>
  </body>
</html>
