<?php
  $width  = 250;
  $height = 250;

  $img = imagecreatetruecolor($width, $height);
  $px_color = imagecolorallocate($img, 0, 0, 0);
  $bg_color = imagecolorallocate($img, 255, 255, 255);
 
  imagesetpixel($img, 100, 100, $px_color);
  imagefill($img, 0, 0, $bg_color);

  header('Content-Type: image/png');
  imagepng($img); 
?>
