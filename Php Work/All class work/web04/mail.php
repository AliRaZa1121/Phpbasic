<?php


if (isset($_POST['btn1'])) {
  $body =  $_POST['body'];
  $headers = "Content-Type: text/html; charset=UTF-8";
  $subject =  $_POST['subject'];
  $to = $_POST['to'];
  mail($to, $subject,$body, $headers );
  echo "mail sent.";
}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>

   </head>
   <body class="container">
     <h1>Send Mail</h1>
     <form class="form" action="" method="post">
        <div class="form-group">
          <label for="">To</label>
          <input type="email" class="form-control" name="to" value="">
        </div>
        <div class="form-group">
          <label for="">Subject</label>
          <input type="text" class="form-control" name="subject" value="">
        </div>
        <div class="form-group">
          <label for="">Body</label>
          <textarea class="form-control" name="body" rows="9" cols="15"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" name="btn1" value="Send Mail">
        </div>

     </form>
   </body>
 </html>
