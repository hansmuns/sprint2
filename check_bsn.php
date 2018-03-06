<!DOCTYPE html>
<html lang="nl">

<head>

    <meta http-equiv="Content-Type"
          content="text/html"
          charset=" UTF-8" />
</head>
<body>

<form name="kaas" method="GET" action="">
        <input name="bsn" type="text">


    <?php
       if (isset($_GET["bsn"])){
           $bsn = $_GET["bsn"];



    if(preg_match("/[a-z]/i", $bsn)){echo "dit is geen geldig bsn nummer, want het bevat letters";}
    else {
        if (strlen($bsn) == 9) {

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
                echo "Dit is een geldig bsn nummer";
            }
            elseif (isset($elfproef)) {
                echo "dit is geen geldig bsn nummer, want het voldoet niet aan de elfproef";
            }
        }   else
            echo "dit is geen geldig bsn nummer, want het is niet 9 cijfers lang";
        }
       };

    ?>

    </form>



</body>

</html>
