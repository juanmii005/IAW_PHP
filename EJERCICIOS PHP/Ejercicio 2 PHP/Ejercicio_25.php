<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 25 PHP</title>
</head>
<body>
    <?php 

        $dineroantesinteres = 5600;
        $interes = $dineroantesinteres * 20 / 100;
        $dinerodespuesinteres =  $dineroantesinteres - $interes;

        echo "El banco te cobra $interes € de intereses y te quedas con $dinerodespuesinteres € en el banco";
    ?>
</body>
</html>