<?php

    function reverse()
    {
        if (isset($_GET["string"])) {
            $string = $_GET["string"];
            return strrev("$string");
        }
    }


    function isprime ()
    {

        if (isset($_GET["prime"])) {
            $num = $_GET["prime"];

            for ($n = 2; $n < $num; $n++) {
                if ($num % $n == 0) {
                    return 'Not prime';
                    exit;
                }

                return 'Prime';
            }
        }
    }

    function isuppercase()
    {
        if (isset($_GET["uppercase"])){
            $tekst = $_GET["uppercase"];
            $controle = str_replace(' ', '', $tekst);

            echo "$tekst <br>";
            if (ctype_upper($controle)) {
                echo "alles is in hoofdletters";
            } else
                echo "niet alles is in hoofdletters";
        }

    }


    function ispalindrome()
    {
        if (isset($_GET["palindrome"])) {
            $_GET["string"] = $_GET["palindrome"];
            $palindrome = $_GET["string"];

            if ($palindrome == reverse()) {
                echo "$palindrome<br> Dit is een palindrome";
                exit;
            } else {
                echo "$palindrome<br> Dit is geen palindrome";
            }
        }
    }


    function maks()
    {
        if (isset($_GET["waarde1"], $_GET["waarde2"], $_GET["waarde3"], $_GET["waarde4"])) {
            $array = array($_GET["waarde1"], $_GET["waarde2"], $_GET["waarde3"], $_GET["waarde4"]);
            $kaas = 0;
            foreach ($array as $value) {
                $test= round($value);
                if (preg_match("/[a-z]/i", $value)) {
                    unset($value);
                }
                elseif ($test > $kaas) {
                    $kaas = $value;
                }

            }
            echo $kaas;
        }
    }

    function check_bsn(){
    if (isset($_GET["bsn"])){
    $bsn = $_GET["bsn"];
    $controle = 0;

        if(preg_match("/[a-z]/i", $bsn)&& strlen($bsn) != 9 ){
            echo 3;
            $controle = 1;
        }
    elseif(preg_match("/[a-z]/i", $bsn)){ echo "2";}

        elseif (strlen($bsn) == 9) {

            $eerste = substr($bsn, -9, 1);
            $tweede = substr($bsn, -8, 1);
            $derde = substr($bsn, -7, 1);
            $vierde = substr($bsn, -6, 1);
            $vijfde = substr($bsn, -5, 1);
            $zesde = substr($bsn, -4, 1);
            $zevende = substr($bsn, -3, 1);
            $achtste = substr($bsn, -2, 1);
            $negende = substr($bsn, -1, 1);
            $elfproef = $eerste * 9 + $tweede * 8 + $derde * 7 + $vierde * 6 + $vijfde * 5 + $zesde * 4 + $zevende * 3 + $achtste * 2 + $negende * -1;

            if ($elfproef % 11 == 0) {
                echo "0";
            }
            elseif (isset($elfproef)) {
                echo "4";
            }
        }
                 elseif ($controle != 1) {
                     echo "1";
                 }

}

}


