<?php
/**
 * Created by PhpStorm.
 * User: Hans Muns
 * Date: 16-2-2018
 * Time: 11:39
 */

$opleiding = $_POST["opleiding"];

if (isset ($_POST["submit"]) ){
    if(true($opleiding["I"])){
        echo 'ICT opleidingen zijn vol. Kies een andere opleiding';
}}