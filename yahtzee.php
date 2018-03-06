<?php
/**
 * Created by PhpStorm.
 * User: Hans Muns
 * Date: 19-2-2018
 * Time: 12:12
 */

$aantalworpen = 1;
$dice1 = rand(1,6);
$dice2 = rand(1,6);
$dice3 = rand(1,6);
$dice4 = rand(1,6);
$dice5 = rand(1,6);
$totaal = 0 + $dice1 + $dice2 + $dice3 + $dice4 + $dice5;

while ($dice1 != $dice2 || $dice1 !=$dice3 || $dice1!=$dice4 || $dice1 != $dice5){
    $aantalworpen++;
    $dice1 = rand(1,6);
    $dice2 = rand(1,6);
    $dice3 = rand(1,6);
    $dice4 = rand(1,6);
    $dice5 = rand(1,6);
    $totaal=$totaal + $dice1 + $dice2 + $dice3 + $dice4 + $dice5;
}

$gemiddelde=$totaal / $aantalworpen;
echo"De yahtzee is:<br>$dice1<br>
    $dice2<br>
    $dice3<br> 
    $dice4<br> 
    $dice5<br>";
echo "Het aantal worpen: $aantalworpen<br>";
echo "het gemiddelde aantal dat is gegooid per worp:";
echo(round($gemiddelde));

