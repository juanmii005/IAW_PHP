<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 14 PHP</title>
</head>
<body>
    <h1>Posición de un dígito en un número</h1>
    <?php
        function encontrarPosicion($num, $digito) {
            return strpos((string)$num, (string)$digito) !== false ? strpos((string)$num, (string)$digito) : -1;
        }
        echo "Posición de 3 en 987654: " . encontrarPosicion(987654, 3);
    ?>
</body>
</html>
