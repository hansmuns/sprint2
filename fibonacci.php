<?php
/**
 * Created by PhpStorm.
 * User: Hans Muns
 * Date: 19-2-2018
 * Time: 14:12
 */

$nummer = 0;
$getal1 = 0;
$getal2 = 1;

echo "$getal1;$getal2;";

for($nummer =0; $nummer <=8; $nummer++){
    $getal1 = $getal1 + $getal2;
    $getal2 = $getal1 + $getal2;
    echo "$getal1;$getal2;";


    continue;
}