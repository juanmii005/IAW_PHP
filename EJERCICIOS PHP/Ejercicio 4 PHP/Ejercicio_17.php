<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 17 PHP</title>
</head>
<body>
    <h1>Obtener el máximo y/o el mínimo de tres números</h1>


    <?php
        
        $num1 = 33;
        $num2 = 10;
        $num3 = 45;
        $maximo = max($num1, $num2, $num3);
        $minimo = min($num1, $num2, $num3);

        echo "Los numero son $num1, $num2, $num3 <br><br>";
        echo "El número mayor es: $maximo <br>";
        echo "El número mas chico es: $minimo";
    ?>

</body>
</html>
