<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 33 PHP</title>
</head>
<body>
    <?php 
        $cateto1 = 54650;
        $cateto2 = 562105445;
        $hipotenusa = sqrt(pow($cateto1,2) + pow($cateto2,2));
        echo "La hipotenusa de un triangulo con cateto $cateto1 y $cateto2 es igual a $hipotenusa";
    ?>
</body>
</html>