<?php
$x = 0;
$y = 0;

$width   = 250;
$height  = 250;

$img = imagecreatetruecolor($width, $height);

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