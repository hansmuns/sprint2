
<!DOCTYPE html>
<html lang="nl">

    <head>

        <meta http-equiv="Content-Type"
              content="text/html";
              charset=" UTF-8" />
        <style>

            td{
                border: black solid 1px;
            }
        </style>
    </head>
    <body>

    <h1>Inschrijfformulier:</h1>

    <form action = "lab05verwerken.php" method="post">
        <table>
        <tr>
            <td> Achternaam:</td>
                <td> <input type="text" name="achternaam"</td>
        </tr>
        <tr>
            <td>Voornaam:</td>
            <td> <input type="text" name="voornaam"</td>
        </tr>
        <tr>
            <td> Adres:</td>
            <td> <input type="text" name="adres"</td>
        </tr>
        <tr>
            <td> Postcode:</td>
            <td>  <input type="text" name="postcode"</td>
        </tr>
        <tr>
            <td> Plaats:</td>
            <td> <select name="plaats">
                    <option value="enschede">Enschede</option>
                    <option value="neede">Neede</option>
                    <option value="hengelo">Hengelo</option>
                    <option value="anders">Anders</option>
                </select> </td>
        </tr>
        <tr>
            <td>  E-mailadres:</td>
            <td> <input type="text" name="email"></td>
        </tr>
        </table>

    <br>Kies een Opleiding:<br>
    <input type="radio" name="opleiding" value="I"> ICT<br>
    <input type="radio" name="opleiding" value="E"> Engels<br>
    <input type="radio" name="opleiding" value="T"> Techniek<br>
    <input type="radio" name="opleiding" value="N"> Nederlands
    <br>
    <br>
    <input type="submit" name="submit" value="Versturen">
    <input type="reset" value="Reset">
    </form>
    </body>

</html>