<?php
$buah = [
    ["nama" => "Durian", "jumlah" => 10],
    ["nama" => "Apel", "jumlah" => 10],
    ["nama" => "Mangga", "jumlah" => 20],
    ["nama" => "Jeruk", "jumlah" => 30],
    ["nama" => "Pepaya", "jumlah" => 10],
];

$max = max(
    $buah[0]["jumlah"], 
    $buah[1]["jumlah"], 
    $buah[2]["jumlah"], 
    $buah[3]["jumlah"], 
    $buah[4]["jumlah"]
);

for ($i=0; $i < count($buah); $i++) { 
    if ($buah[$i]["jumlah"] == $max) {
        echo $buah[$i]["nama"] . "<br/>";
    }
}
?>