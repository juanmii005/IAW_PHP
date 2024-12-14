<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 23 PHP</title>
</head>
<body>
    <?php 

        $producto = "Espetec";
        $precio = 2.99;
        $descuento = $precio * 0.10;
        $preciodescuento = $precio - $descuento;

        echo "Precio anterior del $producto: $precio €<br>";
        echo "Precio anterior del $producto: $preciodescuento €";
    ?>
</body>
</html>