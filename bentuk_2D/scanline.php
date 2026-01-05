<?php
$x = 0;
$y = 0;

function scanline($vx, $vy){
}

do{
    $x++;
    if(($x==$x_max)&&($y<$y_max)){
       $x = 0;
    }
    $y++;
    scanline($x, $y);
}while(($x<$x_max)&&($y<$y_max));

?>