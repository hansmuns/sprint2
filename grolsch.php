<?php
/**
 * Created by PhpStorm.
 * User: Hans Muns
 * Date: 16-2-2018
 * Time: 12:04
 */



$leeftijd =rand (  10 , 30);
$grolsch = "http://www.grolsch.nl";
$ander = "https://www.alcoholinfo.nl/publiek";

if ($leeftijd < 18){
    header ("Location: $ander");
}
else{
    header ("Location: $grolsch");
}