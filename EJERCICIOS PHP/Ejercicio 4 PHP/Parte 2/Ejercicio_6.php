<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6 PHP</title>
</head>
<body>
    <h1>Cálculo del jornal diario</h1>
    <?php
        function calcularJornal($horas, $turno, $festivo) {
            $tarifa = $turno == 'diurno' ? 10 : 13.5;
            if ($festivo) $tarifa *= ($turno == 'diurno') ? 1.1 : 1.15;
            return $horas * $tarifa;
        }
        $resultado = calcularJornal(8, 'diurno', true);
        echo "El jornal diario es: $resultado €";
    ?>
</body>
</html>
