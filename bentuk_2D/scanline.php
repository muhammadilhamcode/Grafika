<?php
$x = 0;
$y = 0;

$width   = 250;
$height  = 250;

// buat gambar
$img = imagecreatetruecolor($width, $height);
// alokasikan warna background
$bg_color = imagecolorallocate($img, 255, 255, 255);
// mengisi background
imagefill($img, 0, 0, $bg_color);

function scanlinefill($vx, $vy){
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

?>