<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 15 PHP</title>
</head>
<body>
    <form method = "get">
        <input type = "text" name = "numero1" placeholder="Escribe el numero 1">
        <input type = "text" name = "numero2" placeholder="Escribe el numero 2">
        <button type = "sumbit" name = "boton">Calcular</button>
    </form>
    <?php 
    $numero1 = floatval($_GET['numero1'] ?? 0);
    $numero2 = floatval($_GET['numero2'] ?? 0);

    if ($numero1 < $numero2){
    echo "<br>El $numero1 es menor que el $numero2";
    }

    elseif ($numero1 > $numero2) {
    echo "<br>El $numero1 es mayor que el $numero2";
    }
    else {
    echo "<br>El $numero1 es igual que el $numero2";
    }
    ?>
</body>
</html>