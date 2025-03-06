<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11 PHP</title>
</head>
<body>
    <h1>Posición de la primera ocurrencia de un dígito</h1>
    <?php
        function posicionDigito($num, $digito) {
            $pos = strpos((string)$num, (string)$digito);
            return $pos !== false ? $pos : -1;
        }
        $resultado = posicionDigito(123456, 4);
        echo "La posición del dígito 4 en 123456 es: $resultado";
    ?>
</body>
</html>
