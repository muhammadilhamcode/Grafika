<?php
$x = 0;
$y = 0;

/* untuk fungsi di bawah tambahkan parameter untuk bgcolor dan new color */
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