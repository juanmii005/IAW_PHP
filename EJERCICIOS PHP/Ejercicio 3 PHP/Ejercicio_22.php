<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 22 PHP</title>
</head>
<body>
    <form method="get">
        <input type="text" placeholder="Escribe nuemro" name="numero"/>
        <input type="submit" value="Enviar">
    </form>
    <br>
<?php
    $numero = floatval($_GET['numero'] ?? 0);
    $b = 1;
    for ($a = 1; $a <= $numero; $a++){
        $b *=$a;
    }
    echo "El factorial de $numero es $b";
    ?>
</body>
</html>