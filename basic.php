<?php
// $var = 656;
// if($var % 2 == 0 && $var % 3 == 0){
//     echo "Divisible by both";
// }
// elseif($var % 2 == 0){
//     echo "Divisible by 2";
// }
// else{
//     echo "not divisible by either 2 or 3";
// }

$level = 4;
switch($level){
    case 1:
        echo "Your are playing at easy level";
        break;
    case 2:
        echo "Your are playing at Moderate level";
        break;
    case 3:
        echo "Your are playing at hard level";
        break;
    case 4:
        echo "Your are playing at extreme level";
        break;
    case 5:
    default:
        echo "Invalid level";
}

