<?php
  $width  = 250;
  $height = 250;

  // buat gambar
  $img = imagecreatetruecolor($width, $height);
  // set warna pixel
  $px_color = imagecolorallocate($img, 0, 0, 0);
  // set warna background
  $bg_color = imagecolorallocate($img, 255, 255, 255);

  // mengisi background
  imagefill($img, 0, 0, $bg_color);
  // menggambar titik pixel
  imagesetpixel($img, 100, 100, $px_color);

  // finishing image
  header('Content-Type: image/png');
  imagepng($img); 
?>
