<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 22 PHP</title>
</head>
<body>
    <?php 

        $radio = 10;
        $longitud = 2 * M_PI * $radio;
        $area = M_PI * pow ($radio, 2);

        echo "La longitud de un circulo con $radio de radio es: $longitud<br>";
        echo "El área de un circulo con $radio de radio es: $area";
    ?>
</body>
</html>