<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 21 PHP</title>
</head>
<body>
    <form method="get">
        <input type="text" name="a" placeholder="Escribe A">
        <input type="text" name="b" placeholder="Escribe B">
        <input type="text" name="c" placeholder="Escribe C">
        <input type="submit" value="Calcular">
    </form>
    <br>
<?php
    $a = floatval($_GET['a'] ?? 1);
    $b = floatval($_GET['b'] ?? 1);
    $c = floatval($_GET['c'] ?? 1);

    $ecuación = $b * $b - 4 * $a * $c;

    if ($ecuación < 0) {
        echo "La ecuación no tiene solucion";
    } elseif ($ecuación == 0) {
        $solucion = -$b / (2 * $a);
        echo "La solución es: $solucion";
    } else {
        $sol1 = (-$b + sqrt($ecuación)) / (2 * $a);
        $sol2 = (-$b - sqrt($ecuación)) / (2 * $a);
        echo "El resultado es: $sol1 y $sol2\n";
    }
?>
</body>
</html>