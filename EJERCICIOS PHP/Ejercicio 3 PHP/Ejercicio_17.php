<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 16 PHP</title>
</head>
<body>
    <form method = "get">
        <input type = "text" name = "numero1" placeholder="Escribe el numero 1">
        <input type = "text" name = "numero2" placeholder="Escribe el numero 2">
        <input type = "text" name = "numero3" placeholder="Escribe el numero 3">
        <button type = "sumbit" name = "boton">Calcular</button>
    </form>
    <?php 
    $numero1 = floatval($_GET['numero1'] ?? 0);
    $numero2 = floatval($_GET['numero2'] ?? 0);
    $numero3 = floatval($_GET['numero3'] ?? 0);

    if ($numero1 < 0) {
        echo"<br>La multiplicacion es igual a " . ($numero1 * $numero2 * $numero3);
    }
    else {
        echo"<br>La suma es igual a " . ($numero1 + $numero2 + $numero3);
    }
    ?>
</body>
</html>