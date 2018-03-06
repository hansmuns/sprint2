<?php
/**
 * Created by PhpStorm.
 * User: Hans Muns
 * Date: 7-2-2018
 * Time: 14:28
 */

$kleuren = array("ruiten_", "klaveren_", "harten_", "schoppen_") ;
$waarden = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, "boer", "vrouw", "heer");
$random1 = $waarden[rand(0, 12)];
$random2 = $kleuren[rand(0, 3)];
echo <<<TEKST
<img src="../images/kaarten/$random2$random1.svg" alt="Kaart">
TEKST;
