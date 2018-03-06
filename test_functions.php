<?php
/**
 * Created by PhpStorm.
 * User: Hans Muns
 * Date: 22-2-2018
 * Time: 08:59
 */

$tekst = "JAA";
echo "$tekst <br>";
if (ctype_upper ($tekst)){
    echo "alles is in hoofdletters";
}
else {
    echo "niet alles is in hoofdletters";
}