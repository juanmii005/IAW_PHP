<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 14 PHP</title>
</head>
<body>
    <?php 
        $segundos = 3600;
        $minutos = $segundos / 60;
        $horas = $minutos / 60;

        echo "Los segundos dados son: $segundos segundos<br>";
        echo "Serian un total de $minutos minutos <br>";
        echo "Serian un total de $horas horas";
    ?>
</body>
</html>