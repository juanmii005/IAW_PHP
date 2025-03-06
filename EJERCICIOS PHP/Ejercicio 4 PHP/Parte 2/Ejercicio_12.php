<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12 PHP</title>
</head>
<body>
    <h1>Función que invierte un número</h1>
    <?php
        function invertirNumero($num) {
            return (int)strrev((string)$num);
        }
        $resultado = invertirNumero(12345);
        echo "El número 12345 invertido es: $resultado";
    ?>
</body>
</html>
