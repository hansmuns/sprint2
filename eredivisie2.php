<?php

$twente = array (
    "heracles" => array (11, "Heracles", "Almelo", 26, 9, 6, 11, -13),
    "sparta" => array (17, "Sparta", "Rotterdam", 26, 4, 6, 16, -28),
    "ajax" => array (2, "Ajax", "Amsterdam", 26, 18, 4, 4, 44),
    "feyenoord" => array (5, "Feyenoord", "Rotterdam", 26, 12, 6, 8, 19),
    "psv" => array (1, "PSV", "Eindhoven", 26, 22, 2, 2, 42),
    "az" => array (3, "AZ", "Alkmaar", 26, 17, 5, 4, 25),
    "utrecht" => array (4, "FC Utrecht", "Utrecht", 26, 12, 8, 6, 3),
    "vitesse" => array (6, "Vitesse", "Arnhem",26, 11, 8, 7, 13),
    "zwolle" => array (7, "PEC Zwolle", "Zwolle", 26, 11, 7, 8, -1),
    "denhaag" => array (8, "ADO Den Haag", "Den Haag", 26, 10, 6, 10, -4),
    "heerenveen" => array (9, "Heerenveen", "Heerenveen", 26, 9, 8, 9, -3),
    "vvv" => array (10, "VVV Venlo", "Venlo", 26, 7, 12, 7, -5),
    "excelsior" => array (12, "Excelsior", "Rotterdam", 26, 9, 5, 12, -6),
    "groningen" => array (13, "FC Groningen", "Groningen", 26, 5, 11, 10, -5),
    "nac" => array (14, "NAC Breda", "Breda", 26, 6, 6, 14, -15),
    "willem" => array (15, "Willem 2", "Tilburg", 26, 6, 5, 15, -16),
    "twente" => array (16, "FC Twente", "Enschede", 26, 4, 6, 16, -19),
    "roda" => array (18, "Roda JC", "Kerkrade", 26, 4, 5, 17, -31)
);

$samenvoegen = array($twente["psv"], $twente["ajax"], $twente["az"], $twente["utrecht"], $twente["feyenoord"], $twente["vitesse"],
    $twente["zwolle"], $twente["denhaag"], $twente["heerenveen"], $twente["vvv"], $twente["heracles"], $twente["excelsior"], $twente["groningen"],
    $twente["nac"], $twente["willem"], $twente["twente"], $twente["sparta"], $twente["roda"]
    );


echo <<<TEXT
<table border="1px solid black">
    <tr>
        <th>Positie</th>
        <th>Clubnaam</th>
        <th>Woonplaats</th>
        <th>Aantal gespeelde wedstrijden</th>
        <th>Aantal gewonnen wedstrijden</th>
        <th>Aantal gelijk gespeelde wedstrijden</th>
        <th>Aantal verloren wedstrijden</th>
        <th>Doelsaldo</th>
    </tr>
TEXT;

$teller = 0;

foreach ($samenvoegen as $value){
    foreach ($value as $waarde){
        $teller++;
        if($teller == 9){
            echo "<tr> <td> $waarde </td>";
            $teller = 1;
        }
        else
        echo "<td> $waarde </td>";
    }
}
echo "</table>";