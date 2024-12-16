<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 30 PHP</title>
</head>
<body>
    <?php 
        $sueldohora = 16;
        $horas = 58;
        $horasminimas = 40;
        $horasextras = ($horas - $horasminimas) * ($sueldohora * 1.5);
        $sueltotal = ($horasminimas * $sueldohora) + $horasextras;
        echo "El trabajador a trabajado un total de $horas de las cuales ".($horas - $horasminimas)." son horas extras, el sueldo total es $sueltotal €";
    ?>
</body>
</html>