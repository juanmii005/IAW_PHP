<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10 PHP</title>
</head>
<body>
    <h1>Factorial de cada número entre dos dados</h1>
    <?php
        function factorialEntre($a, $b) {
            for ($i = $a; $i <= $b; $i++) {
                echo "Factorial de $i: " . factorial($i) . "<br>";
            }
        }
        factorialEntre(3, 6);
    ?>
</body>
</html>
