<?php
/**
 * Created by PhpStorm.
 * User: Hans Muns
 * Date: 16-2-2018
 * Time: 09:30
 */

$boeken = array (
    array ("titel" => "stoner", "auteur" => "John Williams", "genre" => "fictie", "prijs" => 19.99),
    array ("titel" => "de cirkel", "auteur" => "Dave Eggers", "genre" => "fictie", "prijs" => 22.50),
    array ("titel" => "Rayuela", "auteur" => "Julio Cortazar", "genre" => "fictie", "prijs" => 25.50)
);

function prijslijst($item, $key)
{

    echo "prijs:", $item['prijs'],"<br>";

}

echo "---Lab 04: Prijslijst:<br>";
array_walk($boeken, 'prijslijst');