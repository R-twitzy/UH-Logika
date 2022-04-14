<?php
$n = 5;
$k = 10;
$status = "TIDAK BISA";
$array = [4, 3, 6, 7, 1];

for ($i=0; $i < $n; $i++) { 
    for ($l=0; $l < $n; $l++) {
        if ($i == $l){
        } 
        else {
            if ($array[$i] + $array[$l] == $k) {
                $status = "BISA";
            }
        }
    }
}

echo $status;
?>