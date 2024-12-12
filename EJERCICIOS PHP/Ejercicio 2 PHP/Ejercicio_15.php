<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 14 PHP</title>
</head>
<body>
    <?php 
        $kilobytes = 1;
        $megabytes = $kilobytes / 1000;
        $terabytes = $megabytes / 1000;

        echo "Los kilobytes dados son: $kilobytes kilobytes<br>";
        echo "Serian un total de $megabytes megabytes <br>";
        echo "Serian un total de $terabytes terabytes";
    ?>
</body>
</html>