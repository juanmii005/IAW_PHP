<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13 PHP</title>
</head>
<body>
    <h1>Factorial de cada número en un rango</h1>
    <?php
        function factorialEntreRango($a, $b) {
            for ($i = $a; $i <= $b; $i++) {
                echo "Factorial de $i: " . factorial($i) . "<br>";
            }
        }
        factorialEntreRango(2, 5);
    ?>
</body>
</html>
