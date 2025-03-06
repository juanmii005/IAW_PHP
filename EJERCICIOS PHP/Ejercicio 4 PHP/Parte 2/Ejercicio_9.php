<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9 PHP</title>
</head>
<body>
    <h1>Cálculo del factorial de un número</h1>
    <?php
        function factorial($n) {
            return ($n <= 1) ? 1 : $n * factorial($n - 1);
        }
        $resultado = factorial(5);
        echo "El factorial de 5 es: $resultado";
    ?>
</body>
</html>
