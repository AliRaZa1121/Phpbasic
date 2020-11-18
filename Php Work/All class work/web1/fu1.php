<?php
   if(isset($_FILES['image'])){
  //  var_dump($_FILES['image']);
  //  echo $_FILES['image']["size"] . '<br>';
  //  echo $_FILES['image']["name"] . '<br>';
  //  echo $_FILES['image']["type"] . '<br>';
  //   echo $_FILES['image']["tmp_name"] . '<br>';

    $name  =$_FILES['image']["name"];
    $arr = explode('.', $name);
    $ext =  strtolower( $arr[count($arr) - 1]);
    if ($ext == "jpg" || $ext == "png") {
      move_uploaded_file($_FILES['image']["tmp_name"], 'uploaded/' . $_FILES['image']["name"]);
    }

   }
?>
<html>
   <body>

      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>

   </body>
</html>
