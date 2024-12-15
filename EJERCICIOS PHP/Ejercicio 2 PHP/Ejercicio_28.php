<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 28 PHP</title>
</head>
<body>
    <?php 
        $compra = 120;
        $mes = "octubre";
        $descuento = $compra * 15 / 100;
        $compradescuento =  $compra - $descuento;

        echo "La tienda te hace un descuento de $descuento € y tienes que pagar $compradescuento €";
    ?>
</body>
</html>