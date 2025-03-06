<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 PHP</title>
</head>
<body>
    <h1>Función que eleva un número a un exponente</h1>
    <?php
        function potencia($base, $exponente) { return pow($base, $exponente); }
        $resultado = potencia(2, 5);
        echo "2 elevado a la 5 es igual a $resultado";
    ?>
</body>
</html>
