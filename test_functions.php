<?php
include_once ("myfunctions.php")
?>


<h1>Reverse</h1>
<form method="GET" action="">
    <input type="text" name="string">
</form>

<?php
echo reverse();
?>

<h1>Prime</h1>
<form method="GET" action="">
    <input type="text" name="prime">
</form>

<?php
echo isprime();
?>



<h1> Uppercase</h1>
<form method="GET" action="">
    <input type="text" name="uppercase">
</form>


<?php
echo isuppercase();
?>




<h1> Palindrome</h1>
<form method="GET" action="">
    <input type="text" name="palindrome">
</form>

<?php
echo ispalindrome();
?>


<h1>Max</h1>
<form method="GET" action="">
    <input type="text" name="waarde1">
    <input type="text" name="waarde2">
    <input type="text" name="waarde3">
    <input type="text" name="waarde4">
    <input type="submit" name="submit">
</form>
<?php
echo maks();
?>


<h1> BSN Checker</h1>
<form method="GET" action="">
    <input type="text" name="bsn">
</form>

<?php
echo check_bsn();
?>
