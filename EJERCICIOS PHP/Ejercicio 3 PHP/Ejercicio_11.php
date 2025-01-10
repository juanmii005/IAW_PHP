<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11 PHP</title>
</head>
<body>
    <?php
       $var = 1;
       $resultado = 0;
       while ($var <= 100)
   {
       $resultado += pow($var, 2);
       $var ++;
   }

   echo "La suma de lso cuadrados de los 100 primeros numeros es: $resultado";
    ?>
</body>
</html>