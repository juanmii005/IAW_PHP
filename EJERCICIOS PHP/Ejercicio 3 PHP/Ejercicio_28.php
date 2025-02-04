<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 28 PHP</title>
</head>
<body>

    <h3>Calcular area mayor de 2 triangulos</h1>

    <form method="get">
        <input type="text" name="baseprimero" placeholder="Base del primero">
        <input type="text" name="alturaprimero" placeholder="Altura del primero">
        <br><br>
        <input type="text" name="basesegundo" placeholder="Base del segundo">
        <input type="text" name="alturasegundo" placeholder="Altura del segundo">
        <br><br>
        <button type="submit" name="boton">Calcular</button>
    </form>

    <?php

        $baseprimero = floatval($_GET['baseprimero'] ?? 1);
        $alturaprimero = floatval($_GET['alturaprimero'] ?? 1);
        $basesegundo = floatval($_GET['basesegundo'] ?? 1);
        $alturasegundo = floatval($_GET['alturasegundo'] ?? 1);
        $areaprimero = $baseprimero * $alturaprimero / 2;
        $areasegundo = $basesegundo * $alturasegundo / 2;

        if ($areaprimero < $areasegundo) {
            echo "<br>El segundo triangulo tiene mayor area";
        }
        elseif ($areaprimero > $areasegundo) {
            echo "<br>El primer triangulo tiene mayor area";
        }
        else {
            echo "<br>Ambas areas son iguales";
        }
    ?>
</body>
</html>