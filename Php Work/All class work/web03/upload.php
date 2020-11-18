<?php
if (isset($_POST['btn1']))
{
  for ($i=0; $i < count($_FILES['image1']["name"]); $i++) {

    $fname = $_FILES['image1']["name"][$i];

    //technique 2
    $arr =  explode(".", $fname);

    $ext = $arr[count($arr)-1];
    echo $ext . "<br>";

    if ($ext == "jpg" || $ext == "png" || $ext == "html" ) {
      move_uploaded_file($_FILES['image1']["tmp_name"][$i], 'uploading/'.$_FILES['image1']["name"][$i]);
    }

  }
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
      <input type="file" name="image1[]" value="" multiple="multiple">
      <input type="submit" name="btn1" value="Upload">
    </form>
  </body>
</html>
