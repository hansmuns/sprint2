<?php

$kleuren = array("ruiten_", "klaveren_", "harten_", "schoppen_") ;
$waarden = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, "boer", "vrouw", "heer");
$array = array();


for ($x =0; $x <=8; $x++ ){
    $random1 = $waarden[rand(0, 12)];
    $random2 = $kleuren[rand(0, 3)];
    array_push($array, $random2 . $random1);
}

$kaarten = array_unique($array);
sort($kaarten);

for ($y= 0; $y <=4; $y++) {
    echo <<<TEKST
<img src="../images/kaarten/$kaarten[$y].svg" alt="Kaart">
TEKST;
}


