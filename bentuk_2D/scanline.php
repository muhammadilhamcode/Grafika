<?php

/* :) */

$x = 0;
$y = 0;

$width   = 250;
$height  = 250;

/* utk algoritma di bawah ganti dengan algoritma untuk menentukan x max dan y max */

$x_max = $width;
$y_max = $height;

// fungsi pengecatan scanline
function scanlinefill(){}

// process scanline
do{
    $x++;
    if(($x==$x_max)&&($y<$y_max)){
       $x = 0;
    }
    $y++;
    scanlinefill();
}while(($x<$x_max)&&($y<$y_max));

header('Content-Type: image/png');
imagepng($img); 

?>