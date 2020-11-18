<?php 

$html = "<script>alert('hi');</script>";

$sanitized_html = htmlspecialchars($html);

//echo "$html";
echo $sanitized_html;
 ?>