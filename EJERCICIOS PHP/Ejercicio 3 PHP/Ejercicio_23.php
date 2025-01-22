<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 23 PHP</title>
</head>
<body>
    <form method="get">
        <input type="text" name="temp" placeholder="Escribe la temperatura en grados Fahrenheit">
        <button type="submit" name="boton">Calcular</button>
    </form>

    <?php
        $temp = floatval($_GET['temp'] ?? 32);
        $celsius = (5 / 9 * ($temp - 32));

        if ($temp < 999) {
            echo "<br>$temp grados Fahrenheit son $celsius grados celsius";
        }
        else {
            echo "<br>Programa finalizado";
        }       

    ?>
</body>
</html>
