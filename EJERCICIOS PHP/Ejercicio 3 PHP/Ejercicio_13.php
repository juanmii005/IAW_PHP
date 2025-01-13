<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13 PHP</title>
</head>
<body>
    <?php
       $var = 1;
       $resultado = 0;
       $a = 1;
       echo "La suma de los 100 siguientes numeros a $var es ";
       while ($a <= 100)
   {
       $resultado += ($var + $a);
       $a ++;
   }

    echo $resultado;
    ?>
</body>
</html>