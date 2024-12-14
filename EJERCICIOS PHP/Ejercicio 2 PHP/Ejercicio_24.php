<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 24 PHP</title>
</head>
<body>
    <?php 

        $alumnos = 15;
        $alumnas = 12;
        $totalalumnos = $alumnos + $alumnas;
        $porcentajesalumnos = 100 * $alumnos / $totalalumnos;
        $porcentajesalumnas = 100 * $alumnas / $totalalumnos;

        echo "Hay un $porcentajesalumnos % de alumnos<br>";
        echo "Hay un $porcentajesalumnas % de alumnas";   
    ?>
</body>
</html>