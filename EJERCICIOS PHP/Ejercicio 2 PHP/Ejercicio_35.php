<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 35 PHP</title>
</head>
<body>
    <?php 

        $nota1 = 7;
        $nota2 = 8;
        $nota3 = 6;
        $trimestre1 = $nota1 * 20 / 100;
        $trimestre2 = $nota2 * 50 / 100;
        $trimestre3 = $nota3 * 30 / 100;
        $notafinal = $trimestre1 + $trimestre2 + $trimestre3;
        

        echo "La nota final es: $notafinal";
    ?>
</body>
</html>