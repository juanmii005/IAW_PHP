<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 PHP</title>
</head>
<body>
    <h1>Comprobar si un número es primo</h1>
    <?php
        function esPrimo($num) {
            if ($num < 2) return false;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) return false;
            }
            return true;
        }
        $num = 17;
        echo $num . (esPrimo($num) ? " es primo" : " no es primo");
    ?>
</body>
</html>
