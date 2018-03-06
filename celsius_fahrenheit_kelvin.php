<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
    <tr>
        <td>Celsius</td>
        <td>fahrenheit</td>
        <td>Kelvin</td>
    </tr>
    <?php
    for($celsius=-50;$celsius<=50;$celsius++) {
        $fahrenheit = $celsius * 9 / 5 + 32;
        $kelvin = $celsius + 273.15;
        if ($celsius > 0)
            $color = "#00FF00";
        elseif ($celsius <0)
            $color = "#42c5f4";
        elseif ($celsius ==0)
            $color = "#000000";

        echo "<tr>";
        echo "<td style='color: $color'>$celsius</td>";
        echo "<td style='color: $color'>$fahrenheit</td>";
        echo "<td style='color: $color'>$kelvin</td>";
    }
    ?>
</table>
</body>
</html>