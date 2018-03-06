<h1>Reverse</h1>
<form method="GET" action="">
        <input type="text" name="string">
</form>

<?php

function reverse()
{
    $string = $_GET["string"];
    return strrev("$string");

}
if (isset($_GET["string"]))
{
    echo reverse();
}

?>




<h1>Prime</h1>
<form method="GET" action="">
        <input type="text" name="prime">
</form>

<?php

if (isset($_GET["prime"]))
{
    function isprime (){


$num = $_GET["prime"];

for ($n = 2; $n < $num; $n++) {
    if ($num % $n == 0) {
        return 'Not prime';
        exit;
    }

    return 'Prime';
}
}
        echo isprime();
}
?>




<h1> Uppercase</h1>
<form method="GET" action="">
        <input type="text" name="uppercase">
</form>

<?php

if (isset($_GET["uppercase"])) {

    function isuppercase()
    {
        $tekst = $_GET["uppercase"];
        $controle = str_replace(' ', '', $tekst);

        echo "$tekst <br>";
        if (ctype_upper($controle)) {
            echo "alles is in hoofdletters";
        } else {
            echo "niet alles is in hoofdletters";
        }
    }
      isuppercase();
}
?>




<h1> Palindrome</h1>
<form method="GET" action="">
    <input type="text" name="palindrome">
</form>

<?php

if (isset($_GET["palindrome"])) {

    function ispalindrome()
    {
        $_GET["string"] = $_GET["palindrome"];
        $palindrome = $_GET["string"];

        if ($palindrome == reverse()) {
            echo "$palindrome<br> Dit is een palindrome";
            exit;
        }
        else {
            echo "$palindrome<br> Dit is geen palindrome";
        }
    }

    ispalindrome();
}
function max(){

}
?>

