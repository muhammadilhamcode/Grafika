<?php

/* belum di test di xampp untuk melihat errornya yg penting logika di do while nya sudah benar karena inti scan line nya ada di situ, kalo masalahnya tinggal di image tinggal di perbaiki saja, programming di lakukan via smartphone jadi tidak ada xampp-nya. Maklum lagi cari kerja utk jobdesc grafika dengan gaji 45 juta / bln baru bisa beli laptop lagi */

$x = 0;
$y = 0;

$width   = 250;
$height  = 250;

// buat gambar
$img = imagecreatetruecolor($width, $height);
// alokasikan warna background
$bg_color = imagecolorallocate($img, 255, 255, 255);
// new color
$new_color = imagecolorallocate($img, 0, 0, 0);
// mengisi background
imagefill($img, 0, 0, $bg_color);

function scanlinefill($vx, $vy){
  $rgb = imagecolorat($img, $vx, $vx);
  $r = ($rgb >> 16) & 0xFF;
  $g = ($rgb >> 8) & 0xFF;
  $b = $rgb & 0xFF;

  if(($r == 255)&&($g == 255)&&($b == 255)){
     imagesetpixel($img, $vx, $vy, $new_color);
  }

}

$x_max = $width;
$y_max = $height;

do{
    $x++;
    if(($x==$x_max)&&($y<$y_max)){
       $x = 0;
    }
    $y++;
    scanlinefill($x, $y);
}while(($x<$x_max)&&($y<$y_max));

header('Content-Type: image/png');
imagepng($img); 

?>