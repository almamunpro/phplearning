<?php
$var = 656;
if($var % 2 == 0 && $var % 3 == 0){
    echo "Divisible by both";
}
elseif($var % 2 == 0){
    echo "Divisible by 2";
}
else{
    echo "not divisible by either 2 or 3";
}



