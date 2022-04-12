<?php
$n = [4, 6, 1, 3, 5];

for ($i=0; $i < count($n); $i++) { 
    if ($n[$i] % 2 == 0) {
        echo " Genap,";
    } else {
        echo " Ganjil,";
    }
}
?>