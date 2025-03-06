<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 PHP</title>
</head>
<body>
    <h1>Conversión de moneda a euros</h1>
    <?php
        function conversionMoneda($cantidad, $moneda) {
            $tasas = ['libra' => 1.22, 'dolar' => 0.75, 'yen' => 0.009];
            return isset($tasas[$moneda]) ? $cantidad * $tasas[$moneda] : 'Moneda no válida';
        }
        $resultado = conversionMoneda(100, 'dolar');
        echo "100 dólares equivalen a $resultado euros";
    ?>
</body>
</html>
