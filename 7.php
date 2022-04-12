<?php
$n = 5;
$array = [4, 1, 8, 7, 1];
$status = "TIDAK ADA";

for ($i=0; $i < $n; $i++) { 
    for ($l=0; $l < $n; $l++) { 
        if ($i == $l) {
        } 
        else {
            if ($array[$i] == $array[$l]) {
                $status = "ADA";
            }
        }
    }
}

echo $status;
?>