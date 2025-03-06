<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8 PHP</title>
</head>
<body>
    <h1>Obtener los números primos anteriores a N</h1>
    <?php
        function primosAnteriores($n) {
            $primos = [];
            for ($i = 2; $i < $n; $i++) {
                if (esPrimo($i)) $primos[] = $i;
            }
            return implode(", ", $primos);
        }
        echo "Primos anteriores a 20: " . primosAnteriores(20);
    ?>
</body>
</html>
