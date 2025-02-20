<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 16 PHP</title>
</head>
<body>
    <h1>Calcular la potencia de un número</h1>


    <?php
        
        $base = 33;
        $exponente = 10;
        $resultado = pow($base, $exponente);
        echo "Potencia de base $base y exponente $exponente: $resultado";
        
    ?>

</body>
</html>
