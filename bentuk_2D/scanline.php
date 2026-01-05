<?php
$x = 0;
$y = 0;

function scanlinefill($vx, $vy){
}

do{
    $x++;
    if(($x==$x_max)&&($y<$y_max)){
       $x = 0;
    }
    $y++;
    scanlinefill($x, $y);
}while(($x<$x_max)&&($y<$y_max));

?>